<?php

namespace App\Http\Livewire;

use App\Models\Movimento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use NumberFormatter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment as StyleAlignment;

class Receitas extends Component
{
    public $user = [];

    public $user_id = '';

    public $table = [];

    public $search = [
        'start_date' => '',
        'end_date' => ''
    ];

    public $mes = '';

    public $valor_receita = 0;

    public $total_receita = 0;

    public $graphsData = [
        'category' => [
            'labels' => [],
            'data' => [],
        ],
        'graphDough' => [
            'labels' => [],
            'data' => [],
        ]
    ];

    protected $listeners = ['saveSuccess'];

    public function saveSuccess()
    {
        $this->search();
        $this->emit('store', 'Movimento registrado com sucesso');
    }

    public function search()
    {
        $this->valor_receita = 0;
        $query = Movimento::with('categorias')->where('tipo_movimento', 'R');

        if ($this->search['start_date'] && $this->search['end_date']) {
            $query->whereBetween('data_movimento', [$this->search['start_date'], $this->search['end_date']])
                ->where('user_id', Auth::id())
                ->orderBy('data_movimento')->get();
        }

        $this->table = $query->get();

        $sql = "SELECT c.nome, SUM(m.valor) total FROM movimentos m 
                INNER JOIN categorias c ON m.categoria_id = c.id 
                WHERE m.data_movimento BETWEEN 
                '{$this->search['start_date']}' AND '{$this->search['end_date']}'  
                AND m.user_id = '{$this->user_id}'
                AND m.tipo_movimento ='R'
                GROUP BY c.nome";

        $dados = DB::select($sql);
        $this->valor_receita = 0;
        $this->graphsData['category']['labels'] = [];
        $this->graphsData['category']['data'] = [];

        foreach ($dados as $d) {
            $this->graphsData['category']['labels'][] = $d->nome;
            $this->graphsData['category']['data'][] = $d->total;

            $this->valor_receita += $d->total;
        }

        $this->graphDough();
        $this->emit("loadGraphsData", $this->graphsData);

        $this->total_receita = count($this->table);
    }

    public function graphDough()
    {
        $start_date = date('Y-m-01', strtotime(date("Y-m-d") . ' -1 month'));
        $end_date = date('Y-m-t', strtotime(date("Y-m-d") . ' -1 month'));

        $date = new \DateTime();
        $formatter = new \IntlDateFormatter(
            'pt_BR',
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::NONE,
            'America/Sao_Paulo',
            \IntlDateFormatter::GREGORIAN,
            "MMMM"
        );

        $this->mes = datefmt_format($formatter, strtotime($start_date));

        // dd($start_date, $end_date);
        $sql = "SELECT c.nome, SUM(m.valor) total FROM movimentos m 
                INNER JOIN categorias c ON m.categoria_id = c.id 
                WHERE m.data_movimento BETWEEN '{$start_date}' AND '{$end_date}'
                AND m.user_id = '{$this->user_id}'
                AND m.tipo_movimento='R'  
                GROUP BY c.nome";

        $dados = DB::select($sql);
        $this->graphsData['graphDough']['labels'] = [];
        $this->graphsData['graphDough']['data'] = [];

        foreach ($dados as $d) {
            $this->graphsData['graphDough']['labels'][] = $d->nome;
            $this->graphsData['graphDough']['data'][] = $d->total;
        }
    }

    public function delete($id)
    {
        try {
            Movimento::destroy($id);
            $this->search();

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function mount()
    {
        $this->search['start_date'] = date("Y-m-01");
        $this->search['end_date'] = date("Y-m-t");
        $this->user = User::find(Auth::id());

        $this->user_id = $this->user->id;
    }

    public function excel()
    {
        $spreadsheet = new Spreadsheet;
        $relat = $spreadsheet->getActiveSheet();
        $relat->setTitle('relatorio');

        $writer = new Xlsx($spreadsheet);

        $start_date = $this->search['start_date'];
        $end_date = $this->search['end_date'];

        $dateStart = date("d/m/Y", strtotime($start_date));
        $dateEnd = date("d/m/Y", strtotime($end_date));

        $relat->setCellValue('A1', "RECEITAS REGISTRADAS NO PERÍODO DE $dateStart ATÉ $dateEnd");
        $relat->mergeCells("A1:E1");
        $relat->getStyle("A1")->getAlignment()->setHorizontal(StyleAlignment::HORIZONTAL_CENTER);
        $relat->getStyle("A1")->getFont()->setSize(18);


        $relat->setCellValue('A3', 'Nome');
        $relat->setCellValue('B3', 'Categoria');
        $relat->setCellValue('C3', 'Descrição');
        $relat->setCellValue('D3', 'Data');
        $relat->setCellValue('E3', 'Valor');


        $relat->getColumnDimension('A')->setWidth(20);
        $relat->getStyle("A3")->getFont()->setBold(true);

        $relat->getColumnDimension('B')->setWidth(25);
        $relat->getStyle("B3")->getFont()->setBold(true);

        $relat->getColumnDimension('C')->setWidth(20);
        $relat->getStyle("C3")->getFont()->setBold(true);

        $relat->getColumnDimension('D')->setWidth(15);
        $relat->getStyle("D3")->getFont()->setBold(true);


        $relat->getColumnDimension('E')->setWidth(18);
        $relat->getStyle("E3")->getFont()->setBold(true);

        $row = 4;

        foreach ($this->table as $data) {
            // dd($data->categorias->nome);

            $relat->setCellValue("A{$row}", $data['nome']);

            $relat->setCellValue("B{$row}", $data->categorias->nome);
            $relat->getStyle("B{$row}")->getAlignment()->setHorizontal(StyleAlignment::HORIZONTAL_LEFT);

            $relat->setCellValue("C{$row}", $data['descricao']);
            $relat->getStyle("C{$row}")->getAlignment()->setHorizontal(StyleAlignment::HORIZONTAL_LEFT);

            $relat->setCellValue("D{$row}", date("d/m/Y", strtotime($data['data_movimento'])));
            $relat->getStyle("D{$row}")->getAlignment()->setHorizontal(StyleAlignment::HORIZONTAL_LEFT);

            $relat->setCellValue("E{$row}", (new NumberFormatter('pt_BR', NumberFormatter::CURRENCY))->format($data['valor']));
            $relat->getStyle("E{$row}")->getAlignment()->setHorizontal(StyleAlignment::HORIZONTAL_LEFT);

            $row++;
        }

        $file_name = "ReceitasDoMes" . date("m", strtotime($start_date)) . ".xlsx";

        $writer->save("relatorios/" . $file_name);

        return response()->download(public_path() . "/relatorios/{$file_name}");
    }

    public function render()
    {
        return view('livewire.receitas');
    }
}

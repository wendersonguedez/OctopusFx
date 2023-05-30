<?php

namespace App\Http\Livewire;

use App\Models\Movimento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use NumberFormatter;

class Home extends Component
{
    public $valor_despesas = 0;

    public $user_id = '';

    public $tableR = [];

    public $tableD = [];

    public $date = [
        'start_date' => '',
        'end_date' => '',
    ];

    public $graphsData = [
        'category' => [
            'labels' => [],
            'data' => [],
        ],
        'graphDespesa' => [
            'labels' => [],
            'data' => [],
        ]
    ];

    public function cardDespesas()
    {
        $sql = "SELECT SUM(m.valor) total FROM movimentos m 
        WHERE m.data_movimento BETWEEN 
        '{$this->date['start_date']}' AND '{$this->date['end_date']}'
        AND m.user_id = " . Auth::id() . "
        AND m.tipo_movimento = 'D'
        GROUP BY m.tipo_movimento";

        $dados = DB::select($sql);


        $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);

        foreach ($dados as $d) {
            $this->valor_despesas = $fmt->format($d->total);
        }
    }

    public function graphReceitas()
    {
        $sql = "SELECT c.nome, SUM(m.valor) total FROM movimentos m 
                INNER JOIN categorias c ON m.categoria_id = c.id 
                WHERE m.data_movimento BETWEEN 
                '{$this->date['start_date']}' AND '{$this->date['end_date']}'  
                AND m.user_id = '{$this->user_id}'
                AND m.tipo_movimento ='R'
                GROUP BY c.nome";

        $dados = DB::select($sql);

        $this->graphsData['category']['labels'] = [];
        $this->graphsData['category']['data'] = [];

        foreach ($dados as $d) {
            $this->graphsData['category']['labels'][] = $d->nome;
            $this->graphsData['category']['data'][] = $d->total;
        }

        $this->emit("loadGraphsData", $this->graphsData);
    }

    public function graphDespesas()
    {
        $sql = "SELECT c.nome, SUM(m.valor) total FROM movimentos m 
                INNER JOIN categorias c ON m.categoria_id = c.id 
                WHERE m.data_movimento BETWEEN 
                '{$this->date['start_date']}' AND '{$this->date['end_date']}'
                AND m.user_id = '{$this->user_id}'
                AND m.tipo_movimento='D'  
                GROUP BY c.nome";

        $dados = DB::select($sql);

        $this->graphsData['graphDespesa']['labels'] = [];
        $this->graphsData['graphDespesa']['data'] = [];

        foreach ($dados as $d) {
            $this->graphsData['graphDespesa']['labels'][] = $d->nome;
            $this->graphsData['graphDespesa']['data'][] = $d->total;
        }

        $this->emit("loadGraphsData", $this->graphsData);
    }

    public function tableDespesas()
    {
        $query = Movimento::with('categorias')->where('tipo_movimento', 'D');

        if ($this->date['start_date'] && $this->date['end_date']) {
            $query->whereBetween('data_movimento', [$this->date['start_date'], $this->date['end_date']])
                ->where('user_id', Auth::id())
                ->orderBy('data_movimento')
                ->take(5)->get();
        }

        $this->tableD = $query->get();
    }

    public function tableReceitas()
    {
        $query = Movimento::with('categorias')->where('tipo_movimento', 'R');

        if ($this->date['start_date'] && $this->date['end_date']) {
            $query->whereBetween('data_movimento', [$this->date['start_date'], $this->date['end_date']])
                ->where('user_id', Auth::id())
                ->orderBy('data_movimento')
                ->take(5)->get();
        }

        $this->tableR = $query->get();
    }

    public function search()
    {
        $this->user = User::find(Auth::id());
        $this->user_id = $this->user->id;
        $this->date['start_date'] = date('Y-m-01', strtotime(date("Y-m-d")));
        $this->date['end_date'] = date('Y-m-t', strtotime(date("Y-m-d")));
        $this->cardDespesas();
        $this->tableDespesas();
        $this->tableReceitas();
        $this->graphReceitas();
        $this->graphDespesas();
    }

    public function render()
    {
        return view('livewire.home');
    }
}

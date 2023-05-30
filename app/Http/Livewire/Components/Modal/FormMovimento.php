<?php

namespace App\Http\Livewire\Components\Modal;

use App\Http\Livewire\Receitas;
use App\Models\Categorias;
use App\Models\FormaPagamento;
use App\Models\Movimento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class FormMovimento extends ModalComponent
{

    protected $rules = [
        // 'movimento.tipo_movimento' => 'required||unique:prefeitura,cnpj',

        'movimento.nome' => 'required|min:5',

        'movimento.descricao' => 'required|cep|min:8|max:8',

        'movimento.data_movimento' => 'required',

        'movimento.data_vencimento' => 'required',

        'movimento.valor' => 'required',

        // 'movimento.status' => 'required|min:3|max:50',

        'movimento.forma_pagamento_id' => 'required|numeric|gt:0',

        'movimento.categoria_id' => 'required|numeric|gt:0',
    ];

    protected $messages = [
        // Nome
        'movimento.required' => 'O campo nome é de preenchimento obrigatório.',
        'movimento.min' => 'É necessário informar um nome com no minimo 5 caracteres.',

        // Descrição
        'senha_acesso.required' => 'Informe uma senha de acesso.',

        // Nome da instituição
        'agencia.nome_instituicao.required' => 'É necessário informar o nome da instituição.',
        'agencia.nome_instituicao.min' => 'Informe uma instituição com nome válido.',

        // DDD
        'agencia.ddd.required' => 'É necessário informar o DDD do número de telefone.',
        'agencia.ddd.min' => 'É necessário informar um DDD válido.',

        // DDD_T
        'agencia.ddd_t.required' => 'É necessário informar o DDD do número de telefone técnico.',
        'agencia.ddd_t.min' => 'É necessário informar um DDD válido.',
    ];

    public $component;

    public $categorias = [];

    public $forma_pagamento = [];

    public $movimento = [
        'tipo_movimento' => '',
        'nome' => '',
        'descricao' => '',
        'data_movimento' => '',
        'data_vencimento' => '',
        'valor' => 0,
        'status' => '',
        'forma_pagamento_id' => '0',
        'user_id' => '',
        'categoria_id' => '0',
    ];

    public function setMovimento($value)
    {
        $this->movimento['tipo_movimento'] = $value;
        $this->categorias = Categorias::where('tipo_movimento', $value)->get();
    }

    public function save()
    {
        if ($this->movimento['tipo_movimento'] == "R") {
            unset($this->movimento['forma_pagamento_id']);
            unset($this->movimento['status']);
            unset($this->movimento['data_vencimento']);
        }

        try {
            Movimento::create($this->movimento);
            $this->emit('store', 'Receita registrada com sucesso');
            $user = User::find(Auth::id());

            $saldo_atual = $user->saldo;
            if ($this->movimento['tipo_movimento'] == "R") {

                $user->saldo = $saldo_atual + $this->movimento['valor'];
            } else {
                if ($this->movimento['status'] == 'S') {
                    $user->saldo = $saldo_atual - $this->movimento['valor'];
                }
            }
            $user->save();

            $this->closeModalWithEvents([
                'saveSuccess', // Emit global event
                Receitas::getName() => 'saveSuccess'
            ]);
            $this->reset();
        } catch (\Throwable $th) {
            $this->emit('error', 'Ocorreu um erro ao tentar realizar o cadastro');
        }
    }


    public function mount()
    {
        $this->forma_pagamento = FormaPagamento::all();
        $this->movimento['user_id'] = Auth::id();
    }

    public function teste()
    {
        $this->emitTo($this->component, 'notification');
    }

    public function render()
    {
        return view('livewire.components.modal.form-movimento');
    }
}

<?php

namespace App\Http\Livewire\Components\Modal;

use App\Models\Categorias;
use App\Models\FormaPagamento;
use App\Models\Movimento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class FormDespesas extends ModalComponent
{
    public $movimento = [
        'tipo_movimento' => '',
        'nome' => '',
        'descricao' => '',
        'data_movimento' => '',
        'data_vencimento' => '',
        'valor' => '',
        'status' => '',
        'forma_pagamento_id' => '0',
        'user_id' => '',
        'categoria_id' => '0',
    ];

    public $categorias = [];

    public $forma_pagamento = [];

    public function setMovimento($value)
    {
        $this->movimento['tipo_movimento'] = $value;
        $this->categorias = Categorias::where('tipo_movimento', $value)->get();
    }

    public function save()
    {
        // if ($this->movimento['tipo_movimento'] == "R") {
        //     unset($this->movimento['forma_pagamento_id']);
        //     unset($this->movimento['status']);
        //     unset($this->movimento['data_vencimento']);
        // }

        // dd("aqui ó");

        
        try {
            Movimento::create($this->movimento);
            $this->emit('store', 'Despesa registrada com sucesso');
            $user = User::find(Auth::id());
            
            // Recuperando o saldo atual do usuário e salvando em $saldo_atual.
            $saldo_atual = $user->saldo;
            
            if ($this->movimento['tipo_movimento'] == "R") {
                $user->saldo = $saldo_atual + $this->movimento['valor'];
            } else {
                if ($this->movimento['status'] == 'S') {
                    $user->saldo = $saldo_atual - $this->movimento['valor'];
                }
            }
            $user->save();

            // $this->closeModalWithEvents([
            //     'saveSuccess', // Emit global event
            //     Receitas::getName() => 'saveSuccess'
            // ]);

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

    public function render()
    {
        return view('livewire.components.modal.form-despesas');
    }
}

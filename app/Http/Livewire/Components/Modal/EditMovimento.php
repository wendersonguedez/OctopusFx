<?php

namespace App\Http\Livewire\Components\Modal;

use App\Http\Livewire\Despesas;
use App\Http\Livewire\Receitas;
use App\Models\Categorias;
use App\Models\FormaPagamento;
use App\Models\Movimento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditMovimento extends ModalComponent
{

    protected $rules = [
        'movimento.tipo_movimento' => 'required',

        'movimento.nome' => 'required|min:5',

        'movimento.descricao' => 'required|cep|min:8|max:8',

        'movimento.data_movimento' => 'required',

        'movimento.data_vencimento' => 'required',

        'movimento.valor' => 'required',

        'movimento.status' => 'required',

        'movimento.forma_pagamento_id' => 'required|numeric|gt:0',

        'movimento.categoria_id' => 'required|numeric|gt:0',
    ];


    public $component;

    public $categorias = [];

    public $forma_pagamento = [];

    public $movimento;

    public $valor_atual_movimento = 0;

    public function save()
    {
        $user = User::find(Auth::id());
        if ($this->movimento->valor !== $this->valor_atual_movimento) {
            if ($this->valor_atual_movimento > $this->movimento->valor) {
                $diferenca = $this->valor_atual_movimento - $this->movimento->valor;
                $user->saldo = $user->saldo - $diferenca;
                
            } elseif ($this->valor_atual_movimento < $this->movimento->valor) {
                $diferenca = $this->movimento->valor - $this->valor_atual_movimento;
                $user->saldo = $user->saldo + $diferenca;
            }

            $user->save();
        }
        
        $this->movimento->save();

        $this->closeModalWithEvents([
            'saveSuccess', // Emit global event
            Receitas::getName() => 'saveSuccess'
        ]);

        $this->closeModalWithEvents([
            'saveSuccess', // Emit global event
            Despesas::getName() => 'saveSuccess'
        ]);
    }

    public function mount(Movimento $movimento)
    {
        $this->movimento = $movimento;
        $this->valor_atual_movimento = $movimento->valor;
        $this->categorias = Categorias::where('tipo_movimento', $movimento->tipo_movimento)->get();
        $this->forma_pagamento = FormaPagamento::all();
    }


    public function render()
    {
        return view('livewire.components.modal.edit-movimento');
    }
}

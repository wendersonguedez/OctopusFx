<?php

namespace App\Http\Livewire\Components\Modal;

use App\Models\Categorias;
use App\Models\FormaPagamento;
use App\Models\Movimento;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditDespesas extends ModalComponent
{
    public function render()
    {
        return view('livewire.components.modal.edit-despesas');
    }

    public function mount(Movimento $movimento)
    {
        $this->movimento = $movimento;
        $this->valor_atual_movimento = $movimento->valor;
        $this->categorias = Categorias::where('tipo_movimento', $movimento->tipo_movimento)->get();
        $this->forma_pagamento = FormaPagamento::all();
    }
}

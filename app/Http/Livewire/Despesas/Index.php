<?php

namespace App\Http\Livewire\Despesas;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.despesas.index');
    }

    public function excelDespesas()
    {
        dd("aqui");
    }
}

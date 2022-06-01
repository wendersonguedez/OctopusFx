<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Despesas extends Component
{
    public function render()
    {
        return view('livewire.despesas');
    }

    public function excelDespesas()
    {
        dd("aqui");
    }
}

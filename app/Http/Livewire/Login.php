<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public $login = [
        'email',
        'senha',
    ];

    public function login()
    {

        Auth::attempt(['email' => $this->login['email'], 'password' => $this->login['senha']]);

        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return $this->emit('error', 'Usuário e/ou senha inválidos');
        }
    }

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}

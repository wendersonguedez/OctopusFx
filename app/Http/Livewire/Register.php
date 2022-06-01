<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $usuario = [
        'nome',
        'email',
        'cpf',
        'data_nascimento',
        'senha'
    ];

    protected $rules = [
        'usuario.nome' => 'required|min:3|max:60',
        'usuario.email' => 'required|min:12',
        'usuario.cpf' => 'required|min:11|max:11|unique:users,cpf',
        'usuario.data_nascimento' => 'required|date_format:"d/m/Y"',
        'senha' => 'required|min:3',
    ];

    // Função para exibir determinadas mensagens de acordo com sua validação.
    protected $messages = [
        // Nome
        'usuario.nome.required' => 'O campo nome é de preenchimento obrigatório.',
        'usuario.nome.min' => 'É necessário informar um nome com mais de 3 caracteres.',


        // Email
        'usuario.email.required' => 'É necessário que você informe um email de acesso.',
        'usuario.email.min' => 'É necessário que você informe um email de acesso válido.',

        // CPF
        'usuario.cpf.required' => 'É necessário que você informe o seu CPF.',
        'usuario.cpf.min' => 'É necessário que você informe um CPF válido.',
        'usuario.cpf.unique' => 'O CPF informada já está cadastrado.',

        // Senha
        'senha.required' => 'Informe uma senha de acesso.',

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

    public $senha = '';

    public function store()
    {
        // Gerando hash da senha.
        $this->usuario['senha'] = Hash::make($this->senha);

        try {
            $user = User::create([
                'name' => $this->usuario['nome'],
                'email' => $this->usuario['email'],
                'cpf' => $this->usuario['cpf'],
                'data_nascimento' => $this->usuario['data_nascimento'],
                'password' => $this->usuario['senha'],
            ]);

            $this->reset();
            return $this->emit('message', 'Usuário cadastrado com sucesso');
        } catch (\Throwable $th) {
            dd($th);
            return $this->emit('error', 'Ocorreu um erro ao tentar realizar o cadastrado');
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
        return view('livewire.register');
    }
}

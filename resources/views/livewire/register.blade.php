<div>
    <main class="main-content">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-column mx-auto">
                            <div class="card">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Cadastre-se na plataforma</h4>
                                    <p class="mb-0">Digite seus dados para se cadastrar na plataforma.</p>
                                </div>
                                <div class="card-body">
                                    <form wire:submit.prevent="store">
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg" placeholder="Nome"
                                                aria-label="Nome" wire:model="usuario.nome" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg" placeholder="Email"
                                                aria-label="Email" wire:model="usuario.email" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg" placeholder="CPF"
                                                aria-label="CPF" wire:model="usuario.cpf" maxlength="11"
                                                onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="date" class="form-control form-control-lg"
                                                placeholder="Data de nascimento" aria-label="data_nascimento"
                                                wire:model="usuario.data_nascimento" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="Senha" aria-label="Senha" wire:model="senha" required>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                                                Cadastrar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Você já possui uma conta?
                                        <a href="{{ route('login') }}"
                                            class="text-primary text-gradient font-weight-bold">
                                            Faça seu login
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


@section('js')
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Livewire.on('message', (message) => {
            Toast.fire({
                icon: 'success',
                title: message
            })
        })

        Livewire.on('error', (message) => {
            Toast.fire({
                icon: 'error',
                title: message
            })
        })
    </script>
@endsection

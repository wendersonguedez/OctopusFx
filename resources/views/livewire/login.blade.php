<div>
    <main class="main-content">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-column mx-auto">
                            <div class="card">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Entre na plataforma</h4>
                                    <p class="mb-0">Digite seu e-mail e senha para entrar.</p>
                                </div>
                                <div class="card-body">
                                    <form wire:submit.prevent="login">
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg" placeholder="Email"
                                                aria-label="Email" wire:model="login.email" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="Senha" aria-label="Senha" wire:model="login.senha" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                                                Logar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Você ainda não possui uma conta?
                                        <a href="{{ route('register') }}"
                                            class="text-primary text-gradient font-weight-bold">
                                            Faça seu cadastro
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

        Livewire.on('error', (message) => {
            Toast.fire({
                icon: 'error',
                title: message
            })
        })
    </script>
@endsection

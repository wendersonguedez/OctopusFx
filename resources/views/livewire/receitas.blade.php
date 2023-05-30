<div>
    <div class="min-height-400 bg-primary position-absolute w-100 black-color-gradient"></div>

    @include('livewire.components.sidebar')

    <main class="main-content position-relative border-radius-lg" wire:init="search">

        @include('livewire.components.receitas.navbar')

        <div class="container-fluid py-4">
            @include('livewire.components.receitas.nav-bread')

            @include('livewire.components.receitas.filter')

            @include('livewire.components.receitas.cards')

            @include('livewire.components.receitas.graphs')

            @include('livewire.components.receitas.table')
        </div>

    </main>

</div>

@push('styles')
    <style>
        .modal-icon {
            background-color: #61cea3;
        }
    </style>
@endpush

@section('js')
    <script>
        var Bar;
        var Doughnut;

        // Bar chart
        const ctx1 = document.getElementById("line-chart");
        // Doughnut chart
        const ctx3 = document.getElementById("doughnut-chart");
    </script>

    <script src="{{ asset('js/graphs/receitas/bar.js') }}"></script>
    <script src="{{ asset('js/graphs/receitas/doughnut.js') }}"></script>


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

        function deleteMovimento(id) {
            Swal.fire({
                title: 'Você tem certeza?',
                text: "Isto não pode ser revertido!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Sim!'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    const result = await @this.delete(id);
                    if (result) {
                        Toast.fire({
                            icon: 'success',
                            title: "Receita removida com sucesso"
                        })
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: "Erro ao remover a receita"
                        })
                    }

                }

            })
        };

        Livewire.on('store', (message) => {
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

<div>
    <div class="min-height-400 bg-primary position-absolute w-100 black-color-gradient"></div>

    @include('livewire.components.sidebar-despesas')

    <main class="main-content position-relative border-radius-lg" wire:init="search">

        @include('livewire.components.despesas.navbar')

        <div class="container-fluid py-4">

            @include('livewire.components.despesas.nav-bread')

            @include('livewire.components.despesas.filter')

            @include('livewire.components.despesas.cards')

            @include('livewire.components.despesas.graphs')

            @include('livewire.components.despesas.table')

            @include('livewire.components.despesas.modal')
        </div>

    </main>

</div>

@section('js')
    <script>
        var Bar;
        var Doughnut;

        // Bar chart
        const ctx1 = document.getElementById("line-chart");
        // Doughnut chart
        const ctx3 = document.getElementById("doughnut-chart");
    </script>

    <script src="{{ asset('js/graphs/despesas/bar.js') }}"></script>
    <script src="{{ asset('js/graphs/despesas/dough.js') }}"></script>

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
                            title: "Despesa removida com sucesso"
                        })
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: "Erro ao remover a despesa"
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

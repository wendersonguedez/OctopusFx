<div>
    <div class="min-height-400 bg-primary position-absolute w-100 black-color-gradient"></div>

    @include('livewire.components.sidebar')

    <main class="main-content position-relative border-radius-lg">

        @include('livewire.components.despesas.navbar')

        <div class="container-fluid py-4">
            @include('livewire.components.receitas.nav-bread')

            @include('livewire.components.despesas.filter')

            @include('livewire.components.despesas.cards')

            @include('livewire.components.graphs.despesas.index')

            @include('livewire.components.despesas.table')

            @include('livewire.components.despesas.modal')
        </div>

    </main>

</div>

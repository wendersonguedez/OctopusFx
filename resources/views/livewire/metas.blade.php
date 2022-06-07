<div>
    <div class="min-height-200 bg-primary position-absolute w-100 black-color-gradient"></div>

    @include('livewire.components.sidebar')

    <main class="main-content position-relative border-radius-lg">

        @include('livewire.components.metas.navbar')

        <div class="container-fluid py-4">

            @include('livewire.components.metas.nav-bread')

            @include('livewire.components.metas.cards')

            @include('livewire.components.metas.tabs')

            {{-- @include('livewire.components.objetivos.graphs') --}}

            {{-- @include('livewire.components.objetivos.table') --}}

        </div>

    </main>
</div>

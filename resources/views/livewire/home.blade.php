<div>
    <div class="min-height-200 bg-primary position-absolute w-100 black-color-gradient"></div>

    @include('livewire.components.home.sidebar-without-icon')

    <main class="main-content position-relative border-radius-lg">

        @include('livewire.components.home.navbar')

        <div class="container-fluid py-4">
            @include('livewire.components.home.nav-bread')

            @include('livewire.components.home.cards')

            @include('livewire.components.home.graphs')

            @include('livewire.components.home.table')

            @include('livewire.components.home.slide')
        </div>

    </main>

</div>

<div>
    <div class="min-height-200 bg-primary position-absolute w-100 black-color-gradient"></div>

    @include('livewire.components.home.sidebar-without-icon')

    <main class="main-content position-relative border-radius-lg" wire:init="search">

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

@push('styles')
    <style>
        @media print {
            .carousel-inner {
                height: 80rem;
            }

            .header-print {
                margin-top: -40rem;
            }

            .carousel-icon {
                margin-top: -30rem;
            }
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

    <script src="{{ asset('js/graphs/home/bar.js') }}"></script>
    <script src="{{ asset('js/graphs/home/doughnut.js') }}"></script>
@endsection

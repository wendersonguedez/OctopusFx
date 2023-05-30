<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    {{-- Icons --}}
    <link href="{{ asset('css/icons/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/icons/nucleo-svg.css') }}" rel="stylesheet" />

    {{-- CSS only --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS Files --}}
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />

    {{-- Material Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    @stack('styles')

    @livewireStyles
</head>

<body class="g-sidenav-show bg-gray-100">
    {{ $slot }}

    {{-- JavaScript Bundle with Popper --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>


    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>

    {{-- Core JS Files --}}
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>

    {{-- ChartJS --}}
    <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>

    {{-- Theme JS --}}
    <script src="{{ asset('js/argon-dashboard.min.js') }}"></script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    {{-- Modal Livewire --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewire('livewire-ui-modal')

    @livewireScripts

    <script>
        console.log("aquiii");
    </script>
    @yield('js')

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>

</html>

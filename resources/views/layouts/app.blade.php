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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

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

    <script>
        // Doughnut chart
        var ctx3 = document.getElementById("doughnut-chart").getContext("2d");

        new Chart(ctx3, {
            type: "doughnut",
            data: {
                labels: ["Creative Tim", "Github", "Bootsnipp", "Dev.to", "Codeinwp"],
                datasets: [{
                    label: "Projects",
                    weight: 9,
                    cutout: 60,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: [
                        "#2152ff",
                        "#3A416F",
                        "#f53939",
                        "#a8b8d8",
                        "#5e72e4"
                    ],
                    data: [15, 20, 12, 60, 20],
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                interaction: {
                    intersect: false,
                    mode: "index"
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            display: false
                        }
                    }
                }
            }
        });

        // Line chart
        var ctx1 = document.getElementById("line-chart").getContext("2d");

        new Chart(ctx1, {
            type: "line",
            data: {
                labels: [
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec"
                ],
                datasets: [{
                        label: "Organic Search",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#5e72e4",
                        borderColor: "#5e72e4",
                        borderWidth: 3,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6
                    },
                    {
                        label: "Referral",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#3A416F",
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    },
                    {
                        label: "Direct",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#17c1e8",
                        borderColor: "#17c1e8",
                        borderWidth: 3,
                        data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                        maxBarThickness: 6
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                interaction: {
                    intersect: false,
                    mode: "index"
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: "#b2b9bf",
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2
                            }
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: "#b2b9bf",
                            padding: 10,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2
                            }
                        }
                    }
                }
            }
        });
    </script>

    @livewire('livewire-ui-modal')

    @livewireScripts

    @yield('js')

</body>

</html>

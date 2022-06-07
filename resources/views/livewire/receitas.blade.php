<div>
    <div class="min-height-400 bg-primary position-absolute w-100 black-color-gradient"></div>

    @include('livewire.components.sidebar')

    <main class="main-content position-relative border-radius-lg">

        @include('livewire.components.receitas.navbar')

        <div class="container-fluid py-4">
            @include('livewire.components.receitas.nav-bread')

            @include('livewire.components.receitas.filter')

            @include('livewire.components.receitas.cards')

            @include('livewire.components.receitas.graphs')

            @include('livewire.components.receitas.table')

            @include('livewire.components.receitas.modal')
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
        // Doughnut chart
        var ctx3 = document.getElementById("doughnut-chart").getContext("2d");

        new Chart(ctx3, {
            type: "doughnut",
            data: {
                labels: ["Compras do mês", "teste", "Energia", "Água", "Roupas"],
                datasets: [{
                    label: "Valor",
                    weight: 20,
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
                    data: [1400, 600, 150, 500, 350],
                    // fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true
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
            type: "bar",
            data: {
                labels: [
                    "Salário",
                    "Aluguel",
                    "Emprestimo",
                    "Frete",
                    "Empreendimento",
                ],
                datasets: [{
                    label: "Valor",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#5e72e4",
                    borderColor: "#5e72e4",
                    borderWidth: 3,
                    data: [1200, 900, 1100, 400, 2000],
                    maxBarThickness: 6
                }, ]
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
                            color: "#000",
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
                            color: "#000",
                            padding: 10,
                            font: {
                                size: 13,
                                family: "Open Sans",
                                style: "sans-serif",
                                lineHeight: 2
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection

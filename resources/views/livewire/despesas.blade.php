<div>
    <div class="min-height-400 bg-primary position-absolute w-100 black-color-gradient"></div>

    @include('livewire.components.sidebar')

    <main class="main-content position-relative border-radius-lg">

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
        // Doughnut chart
        var ctx3 = document.getElementById("doughnut-chart").getContext("2d");

        new Chart(ctx3, {
            type: "doughnut",
            data: {
                labels: ["Mercado", "Internet", "Energia", "Água", "Roupas"],
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
                    data: [500, 200, 700, 500, 350],
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
                    "Compras no mercado",
                    "Aluguel de casa",
                    "Saída ao cinema",
                    "Compra de roupas",
                    "Conta de água",
                ],
                datasets: [{
                    label: "Valor",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#5e72e4",
                    borderColor: "#5e72e4",
                    borderWidth: 3,
                    data: [600, 1000, 150, 400, 550],
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

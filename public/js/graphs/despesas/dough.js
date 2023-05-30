document.addEventListener("DOMContentLoaded", () => {
    Livewire.on("loadGraphsData", ({ graphDough: { labels, data } }) => {
        if (Doughnut !== undefined) {
            Doughnut.destroy();
        }
        Doughnut = new Chart(ctx3, {
            type: "doughnut",
            data: {
                labels,
                datasets: [
                    {
                        label: "",
                        data,
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
                            "#5e72e4",
                        ],
                        // fill: false
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                    },
                },
                interaction: {
                    intersect: false,
                    mode: "index",
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false,
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false,
                        },
                    },
                },
            },
        });
    });
});

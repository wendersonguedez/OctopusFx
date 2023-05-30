document.addEventListener("DOMContentLoaded", () => {
    Livewire.on("loadGraphsData", ({ category: { labels, data } }) => {
        if (Bar !== undefined) {
            Bar.destroy();
        }
        Bar = new Chart(ctx1, {
            type: "bar",
            data: {
                labels,
                datasets: [
                    {
                        label: "",
                        data: data,
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#5e72e4",
                        borderColor: "#5e72e4",
                        borderWidth: 3,
                        maxBarThickness: 6,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
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
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: "#000",
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2,
                            },
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5],
                        },
                        ticks: {
                            display: true,
                            color: "#000",
                            padding: 10,
                            font: {
                                size: 13,
                                family: "Open Sans",
                                style: "sans-serif",
                                lineHeight: 2,
                            },
                        },
                    },
                },
            },
        });
    });
});

// new Chart(ctx1, {
//     type: "bar",
//     data: {
//         labels: ["alo", "Aluguel", "Emprestimo", "Frete", "Empreendimento"],
//         datasets: [
//             {
//                 label: "Valor",
//                 tension: 0.4,
//                 borderWidth: 0,
//                 pointRadius: 2,
//                 pointBackgroundColor: "#5e72e4",
//                 borderColor: "#5e72e4",
//                 borderWidth: 3,
//                 data: [1200, 900, 1100, 400, 2000],
//                 maxBarThickness: 6,
//             },
//         ],
//     },
//     options: {
//         responsive: true,
//         maintainAspectRatio: false,
//         plugins: {
//             legend: {
//                 display: false,
//             },
//         },
//         interaction: {
//             intersect: false,
//             mode: "index",
//         },
//         scales: {
//             y: {
//                 grid: {
//                     drawBorder: false,
//                     display: true,
//                     drawOnChartArea: true,
//                     drawTicks: false,
//                     borderDash: [5, 5],
//                 },
//                 ticks: {
//                     display: true,
//                     padding: 10,
//                     color: "#000",
//                     font: {
//                         size: 11,
//                         family: "Open Sans",
//                         style: "normal",
//                         lineHeight: 2,
//                     },
//                 },
//             },
//             x: {
//                 grid: {
//                     drawBorder: false,
//                     display: true,
//                     drawOnChartArea: true,
//                     drawTicks: true,
//                     borderDash: [5, 5],
//                 },
//                 ticks: {
//                     display: true,
//                     color: "#000",
//                     padding: 10,
//                     font: {
//                         size: 13,
//                         family: "Open Sans",
//                         style: "sans-serif",
//                         lineHeight: 2,
//                     },
//                 },
//             },
//         },
//     },
// });

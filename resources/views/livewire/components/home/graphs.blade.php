<div>
    <div class="spacing-top">
        <h3 class="title-section-home text-uppercase">Visão Geral</h3>
        <div class="row" style="margin-top: 1rem">
            <div class="col-lg-8 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-sm mb-0 text-uppercase font-weight-bold">Receitas do mês atual</h6>
                        <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="line-chart" class="chart-canvas" height="300px"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-sm mb-0 text-uppercase font-weight-bold">Despesas do mês atual</h6>
                        <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="doughnut-chart" class="chart-canvas" height="300px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        /* Quando o tamanho da viewport for < que 575px, o estilo abaixo será aplicado. */
        @media only screen and (max-width: 575px) {
            .title-section-home {
                color: #344767;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                font-size: 20px;
            }
        }

        /* Quando o tamanho da viewport for >= que 575px, o estilo abaixo será aplicado */
        @media only screen and (min-width: 575px) {
            .title-section-home {
                color: #344767;
                font-family: 'Montserrat', sans-serif;
                font-size: 25px;
            }

            .spacing-top {
                margin-top: 2.5rem;
            }
        }

    </style>
@endpush

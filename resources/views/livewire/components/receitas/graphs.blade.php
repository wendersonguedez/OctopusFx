<div class="row" style="margin-top: 1rem">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-sm mb-0 text-uppercase font-weight-bold">
                    Receitas registradas no periodo de 
                    {{ date('d/m/y', strtotime($search['start_date'])) }} -
                    {{ date('d/m/y', strtotime($search['end_date'])) }}
                </h6>
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

    <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-sm mb-0 text-uppercase font-weight-bold">Receitas por categoria do mês de {{ $mes }}</h6>
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

<div class="row mb-4 justify-content-center">
    <div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Valor de todas as receitas registradas</p>
                            <h5 class="font-weight-bolder">
                                {{ (new NumberFormatter('pt_BR', NumberFormatter::CURRENCY))->format($valor_receita) }}
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+3%</span>
                                since last week
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                            <i class="material-icons f-left" style="opacity: 100%">money_off</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Quantidade de receitas registradas</p>
                            <h5 class="font-weight-bolder">
                                {{ $total_receita }}
                            </h5>
                            <p class="mb-0">
                                <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                since last quarter
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                            <i class="fa fa-usd text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

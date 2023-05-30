<div class="row">
    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <h6 class="text-sm mb-0 text-uppercase font-weight-bold">Saldo atual</h6>
                            <h5 class="font-weight-bolder">
                                {{-- {{ (new NumberFormatter('pt_BR', NumberFormatter::CURRENCY))->format(Auth::user()->saldo) }} --}}
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+55%</span>
                                since yesterday
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <i class="fa fa-bank text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <h6 class="text-sm mb-0 text-uppercase font-weight-bold">Valor de todas as despesas</h6>
                            <h5 class="font-weight-bolder">
                                {{ $valor_despesas }}
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+3%</span>
                                since last week
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                            <i class="fa fa-users text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

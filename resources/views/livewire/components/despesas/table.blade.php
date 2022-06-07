<div class="card mt-4">
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <div class="card-header" style="margin-bottom: -25px">
                    <div class="d-flex bd-highlight align-items-center">
                        <div class="p-2 flex-grow-1 bd-highlight">
                            <h6 class="mb-0 title-section-home text-uppercase">Despesas no mês de maio</h6>
                        </div>
                        <button wire:click="excelDespesas"
                            class="btn btn-success mt-2 mb-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-excel-o f-left me-2" style="opacity: 100%; font-size: 20px"></i>
                            <h6 class="text-sm mb-0 text-uppercase font-weight-bold text-white">Gerar arquivo excel</h6>
                        </button>
                    </div>
                </div>
                <tr>
                    <th></th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Nome
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Valor
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Receita 
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Categoria
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Data
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Descrição
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Situação
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder" colspan="2">
                        Funções
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="{{ url('img/expense.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-dark text-center text-sm font-weight-bold mb-0">Compras no mercado</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$600,00</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Salário</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Mercado</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">04/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Compras no mercado para durar até
                            o final do mês</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Paga</p>
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">

                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>

                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="{{ url('img/expense.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-dark text-center text-sm font-weight-bold mb-0">Aluguel de casa</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$1.000</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Salário</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Casa</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">05/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Pagamento do aluguel de casa</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Paga</p>
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">

                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>

                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="{{ url('img/expense.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Saida ao cinema</h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$150,00</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Investimentos</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Lazer</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">09/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Cinema com os meus amigos para
                            assistir
                            homem aranha</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Paga</p>
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">

                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>

                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="{{ url('img/expense.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Compra de roupas</h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$400,00</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Investimentos</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Vestuário</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">14/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Roupa para usar no casamento da
                            minha irmã
                        </p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Paga</p>
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">

                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>

                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="{{ url('img/expense.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Conta de água</h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$550,00</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Salário</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Casa</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">07/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Pagamento da conta de água</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Não Paga</p>
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">

                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

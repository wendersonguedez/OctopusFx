<div class="card mt-4">
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <div class="card-header" style="margin-bottom: -25px">
                    <div class="d-flex bd-highlight align-items-center">
                        <div class="p-2 flex-grow-1 bd-highlight">
                            <h6 class="mb-0 title-section-home text-uppercase">Receitas no mês de maio</h6>
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
    
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder"
                        colspan="2">
                        Funções
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="{{ url('img/money.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-dark text-center text-sm font-weight-bold mb-0">Salário</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$350,00</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Equipamento de trabalho</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">20/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Headset Havit para usar no trabalho</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Recebido</p>
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
                        <img src="{{ url('img/money.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-dark text-center text-sm font-weight-bold mb-0">Encomenda de doces</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$300,00</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Lazer</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">24/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Mouse novo para jogar</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Recebido</p>
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
                        <img src="{{ url('img/money.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-dark text-center text-sm font-weight-bold mb-0">Investimentos</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$320,00</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Pessoal</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">09/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Mochila para uso pessoal e no trabalho</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Recebido</p>
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
                        <img src="{{ url('img/money.png') }}" class="avatar avatar-sm" style="border-radius: 0px">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-dark text-center text-sm font-weight-bold mb-0">Encomenda de doces</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">R$1.350,00</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Lazer</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">23/01/2021</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Drone para usar como lazer</p>
                    </td>

                    <td>
                        <p class="text-dark text-center text-sm font-weight-bold mb-0">Não Recebido</p>
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

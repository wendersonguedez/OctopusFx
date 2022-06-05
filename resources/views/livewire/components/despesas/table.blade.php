<div class="card mt-4">
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <div class="card-header" style="margin-bottom: -25px">
                <div class="d-flex bd-highlight align-items-center">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <h5 class="card-title">Lista de todas as suas despesas</h5>
                    </div>
                    <button wire:click="excelDespesas"
                        class="btn btn-success mt-2 mb-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-excel-o f-left mr-2" style="opacity: 100%; font-size: 20px"></i>
                    </button>
                </div>
            </div>
            <thead>
                <tr>
                    <th>#</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Nome
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Valor
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Receita
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Categoria
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Forma de pagamento
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Data
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Descrição
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                        colspan="2">
                        Funções
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td style="">
                        <img src="{{ url('img/price-tag.png') }}" class="avatar avatar-sm">
                    </td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Headset Gamer</h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">R$350,00</p>
                    </td>

                    <td>
                        <p class=" text-center text-xs font-weight-bold mb-0">Salário</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Equipamento de trabalho</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Dinheiro</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">20/01/2021</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Headset Havit para usar no trabalho</p>
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
                    <td style="display: flex; justify-content: center;">
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ url('img/price-tag.png') }}" class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Headset Gamer</h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">R$350,00</p>
                    </td>

                    <td>
                        <p class=" text-center text-xs font-weight-bold mb-0">Salário</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Equipamento de trabalho</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Dinheiro</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">20/01/2021</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Headset Havit para usar no trabalho</p>
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
                    <td style="display: flex; justify-content: center">
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ url('img/price-tag.png') }}" class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Headset Gamer</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">R$350,00</p>
                    </td>

                    <td>
                        <p class=" text-center text-xs font-weight-bold mb-0">Salário</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Equipamento de trabalho</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Dinheiro</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">20/01/2021</p>
                    </td>

                    <td>
                        <p class="text-center text-xs font-weight-bold mb-0">Headset Havit para usar no trabalho</p>
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

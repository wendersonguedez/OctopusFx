<div class="card mt-4">
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
    {{-- <div class="card-header border-0" style="margin-bottom: -25px">
        <h4 class="mb-0">Lista de todas as despesas</h4>
    </div> --}}
    
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produto</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nome</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Valor
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Categoria
                    </th>
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Forma de pagamento
                    </th>
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Data
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Descrição
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                        colspan="2">
                        Funções
                    </th>
                    {{-- <th class="text-secondary opacity-7"></th> --}}

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">John Michael</h6>
                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Headset Gamer</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">R$300,00</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Lazer</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Dinheiro</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">20/02/2022</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">
                            Fone de ouvido Havit H2002D
                        </p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">
                        {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user"> --}}
                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>
                        {{-- </a> --}}
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-5.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Sarah Gray</h6>
                                <p class="text-xs text-secondary mb-0">sarah@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Headset Gamer</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">R$300,00</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Lazer</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Dinheiro</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">20/02/2022</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">
                            Fone de ouvido Havit H2002D
                        </p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">
                        {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user"> --}}
                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>
                        {{-- </a> --}}
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">John Michael</h6>
                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Headset Gamer</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">R$300,00</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Lazer</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Dinheiro</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">20/02/2022</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">
                            Fone de ouvido Havit H2002D
                        </p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">
                        {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user"> --}}
                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>
                        {{-- </a> --}}
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">John Michael</h6>
                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Headset Gamer</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">R$300,00</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Lazer</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Dinheiro</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">20/02/2022</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">
                            Fone de ouvido Havit H2002D
                        </p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>

                    <td class="align-middle d-flex d-flex justify-content-center align-items-center" style="gap: 10px">
                        {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user"> --}}
                        <button class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                        </button>

                        <button class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                            style="width: 20px; margin-top: 16px">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                        </button>
                        {{-- </a> --}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

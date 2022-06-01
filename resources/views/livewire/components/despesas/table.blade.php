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

    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Nome
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Valor
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Receita
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

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">R$300,00</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>

                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">R$300,00</p>
                        {{-- <p class="text-xs text-secondary mb-0">Guedes</p> --}}
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Salário</p>
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

                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                {{-- <h6 class="mb-0 text-xs">Sarah Gray</h6> --}}
                                <p class="text-xs font-weight-bold mb-0 text-center">Headset Gamer</p>
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

<div class="card">
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Valor</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Receita</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categoria</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Forma de
                        pagamento</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descrição</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                        colspan="2">
                        Funções
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex px-2">
                            
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs">Headset Gamer</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">R$300</p>
                    </td>
                    <td>
                        <span class="badge badge-dot me-4">
                            <span class="text-dark text-xs">working</span>
                        </span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <p class="text-xs font-weight-bold mb-0">Equipamento para trabalho</p>
                        </div>
                    </td>

                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
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

                <tr>
                    <td>
                        <div class="d-flex px-2">
                            <div>
                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-jira.svg"
                                    class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs">Jira</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">$3,400</p>
                    </td>
                    <td>
                        <span class="badge badge-dot me-4">
                            <i class="bg-danger"></i>
                            <span class="text-dark text-xs">canceled</span>
                        </span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs">30%</span>
                            <div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="30"
                                        aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2">
                            <div>
                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-slack.svg"
                                    class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs">Slack</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">$1,000</p>
                    </td>
                    <td>
                        <span class="badge badge-dot me-4">
                            <i class="bg-danger"></i>
                            <span class="text-dark text-xs">canceled</span>
                        </span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs">0%</span>
                            <div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2">
                            <div>
                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-webdev.svg"
                                    class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs">Webdev</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">$14,000</p>
                    </td>
                    <td>
                        <span class="badge badge-dot me-4">
                            <i class="bg-info"></i>
                            <span class="text-dark text-xs">working</span>
                        </span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs">80%</span>
                            <div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2">
                            <div>
                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-xd.svg"
                                    class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs">Adobe XD</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">$2,300</p>
                    </td>
                    <td>
                        <span class="badge badge-dot me-4">
                            <i class="bg-success"></i>
                            <span class="text-dark text-xs">done</span>
                        </span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs">100%</span>
                            <div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

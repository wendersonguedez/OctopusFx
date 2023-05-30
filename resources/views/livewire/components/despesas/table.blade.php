<div class="card mt-4">
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <div class="card-header" style="margin-bottom: -25px">
                    <div class="d-flex bd-highlight align-items-center">
                        <div class="p-2 flex-grow-1 bd-highlight">
                            <h6 class="mb-0 title-section-home text-uppercase">Despesas no mês de maio</h6>
                        </div>
                        <button wire:click="excel"
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
                        Forma de pagamento
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Data
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Data de vencimento
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Descrição
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">
                        Pago
                    </th>
                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder" colspan="2">
                        Funções
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table as $t)
                    <tr>
                        <td>
                            <img src="{{ url('img/expense.png') }}" class="avatar avatar-sm"
                                style="border-radius: 0px">
                        </td>
                        <td class="d-flex justify-content-center">
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <p class="text-dark text-center text-sm font-weight-bold mb-0">
                                        {{ ucfirst($t->nome) }}
                                    </p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <p class="text-dark text-center text-sm font-weight-bold mb-0">
                                {{ (new NumberFormatter('pt_BR', NumberFormatter::CURRENCY))->format($t->valor) }}
                            </p>
                        </td>

                        <td>
                            <p class="text-dark text-center text-sm font-weight-bold mb-0">
                                {{ $t->categorias->nome }}
                            </p>
                        </td>

                        <td>
                            <p class="text-dark text-center text-sm font-weight-bold mb-0">
                                {{ $t->forma_pagamento->nome }}
                            </p>
                        </td>

                        <td>
                            <p class="text-dark text-center text-sm font-weight-bold mb-0">
                                {{ date('d/m/Y', strtotime($t->data_movimento)) }}
                            </p>
                        </td>

                        <td>
                            <p class="text-dark text-center text-sm font-weight-bold mb-0">
                                {{ date('d/m/Y', strtotime($t->data_vencimento)) }}
                            </p>
                        </td>

                        <td>
                            <p class="text-dark text-center text-sm font-weight-bold mb-0">
                                {{ ucfirst($t->descricao) }}
                            </p>
                        </td>

                        @if ($t->status == 'S')
                            <td  wire:click="updateStatus({{$t->id}}, 'sum')" class="justify-content-center align-items-center" style="padding: 0px 50px !important"
                                style="padding: 0px 0px 0px 60px">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1"
                                        checked="">
                                </div>
                            </td>
                        @else
                            <td wire:click="updateStatus({{$t->id}}, 'sub')" class="justify-content-center align-items-center" style="padding: 0px 50px !important"
                                style="padding: 0px 0px 0px 60px">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1">
                                </div>
                            </td>
                        @endif

                        <td class="align-middle d-flex d-flex justify-content-center align-items-center"
                            style="gap: 10px">

                            <button
                                class="btn btn-icon btn-2 btn-warning d-flex justify-content-center align-items-center"
                                style="width: 20px; margin-top: 16px"
                                onclick="Livewire.emit('openModal', 'components.modal.edit-movimento', {{ json_encode(["movimento" => $t->id]) }})">
                                <i class="fa fa-pencil" style="font-size: 14px" aria-hidden="true"></i>
                            </button>

                            <button
                                class="btn btn-icon btn-2 btn-danger d-flex justify-content-center align-items-center"
                                style="width: 20px; margin-top: 16px"
                                onclick="deleteMovimento({{ $t->id }})">
                                <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                            </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

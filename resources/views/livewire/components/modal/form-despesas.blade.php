<div>
    <div class="modal-header" style="background-image: linear-gradient(310deg, #212229 0%, #212529 100%);">
        <h6 class="modal-title white-color text-uppercase" id="modal-title">Registrar movimento</h6>
    </div>
    <div class="modal-body p-2">
        <div class="card card-plain">
            <div class="card-body pb-2">
                <form role="form text-left" wire:submit.prevent="save">
                    <div class="form-group">
                        <label for="nome"
                            class="text-center text-uppercase text-default text-xxs font-weight-bolder">Nome</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </span>
                            <input wire:model="movimento.nome" type="text" id="nome" class="form-control"
                                placeholder="Salário | Fone de ouvido" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="valor"
                            class="text-center text-uppercase text-default text-xxs font-weight-bolder">Valor</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                            </span>
                            <input wire:model="movimento.valor" type="text" id="valor" class="form-control"
                                placeholder="R$300,00" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <label for="valor" class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                        Tipo de movimento
                    </label>
                    <div role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                            wire:click='setMovimento("R")'>
                        <label class="text-uppercase text-default text-sm font-weight-bolder btn btn-outline-success"
                            for="btnradio1">
                            Receita
                        </label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"
                            wire:click='setMovimento("D")'>
                        <label class="text-uppercase text-default text-sm font-weight-bolder btn btn-outline-danger"
                            for="btnradio2">
                            Despesa
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="data"
                            class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                            Data
                        </label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </span>
                            <input wire:model="movimento.data_movimento" class="form-control" type="date"
                                id="data">
                        </div>
                    </div>

                    @if ($movimento['tipo_movimento'] == 'D')
                        <div class="form-group">
                            <label for="vencimento"
                                class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                                Data de vencimento
                            </label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </span>
                                <input wire:model="movimento.data_vencimento" class="form-control" type="date"
                                    value="2022-02-03" id="vencimento">
                            </div>
                        </div>

                        <label for="vencimento"
                            class="text-center text-uppercase text-default text-xxs font-weight-bolder">Status</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" value="S" id="pago"
                                    wire:model="movimento.status">
                                <label class="custom-control-label" for="pago">
                                    Pago
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="N" id="nao_pago"
                                    wire:model="movimento.status">
                                <label class="custom-control-label" for="nao_pago">
                                    Não pago
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="formaPagamento"
                                class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                                Forma de pagamento
                            </label>

                            <select class="form-control" id="formaPagamento"
                                wire:model="movimento.forma_pagamento_id">
                                <option value="0" selected>Selecione...</option>
                                @foreach ($forma_pagamento as $f)
                                    <option value="{{ $f->id }}">{{ $f->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif


                    <div class="form-group">
                        <label for="categoria"
                            class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                            Categoria
                        </label>
                        <select class="form-control" id="categoria" wire:model="movimento.categoria_id">
                            <option value="0" selected>Selecione...</option>
                            @foreach ($categorias as $c)
                                <option value="{{ $c->id }}">{{ $c->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="descricao"
                            class="text-center text-uppercase text-default text-xxs font-weight-bolder">Descrição</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </span>
                            <input wire:model="movimento.descricao" type="text" id="descricao"
                                class="form-control" placeholder="Descrição" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="$emit('closeModal')" type="button" class="btn bg-danger white-color"
                            data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn bg-success white-color">Registrar movimento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

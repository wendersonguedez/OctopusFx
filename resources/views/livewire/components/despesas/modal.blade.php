{{-- <div class="modal fade" id="despesas" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h6 class="modal-title white-color text-uppercase" id="modal-title">Registrar Despesa</h6>
            </div>
            <div class="modal-body p-2">
                <div class="card card-plain">
                    <div class="card-body pb-2">
                        <form role="form text-left">
                            <div class="form-group">
                                <label for="nome"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Nome</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" id="nome" class="form-control" placeholder="Fone de ouvido"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="valor"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Valor</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" id="valor" class="form-control" placeholder="R$300,00"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="formaPagamento"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                                    Receita
                                </label>
                                <select class="form-control" id="formaPagamento">
                                    <option value="0">Selecione...</option>
                                    <option value="1">Salário</option>
                                    <option value="2">Investimento</option>
                                    <option value="3">Empréstimo</option>
                                    <option value="4">Aluguel</option>
                                    <option value="5">Outras</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="categoria"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                                    Categoria
                                </label>
                                <select class="form-control" id="categoria">
                                    <option value="0">Selecione...</option>
                                    <option value="1">Casa</option>
                                    <option value="2">Educação</option>
                                    <option value="3">Eletrônicos</option>
                                    <option value="4">Lazer</option>
                                    <option value="5">Saúde</option>
                                    <option value="6">Supermercado</option>
                                    <option value="7">Transporte</option>
                                    <option value="8">Vestuário</option>
                                    <option value="9">Viagem</option>
                                    <option value="10">Outras</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="formaPagamento"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Forma de
                                    pagamento</label>
                                <select class="form-control" id="formaPagamento">
                                    <option value="0">Selecione...</option>
                                    <option value="1">Dinheiro</option>
                                    <option value="2">Cartão de débito</option>
                                    <option value="3">Cartão de crédito</option>
                                    <option value="4">Pix</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="vencimento"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Data</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <input class="form-control" type="date" value="2018-11-23" id="vencimento">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="descricao"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Descrição</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" id="descricao" class="form-control" placeholder="Descrição"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-danger white-color" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn bg-success white-color">Cadastrar</button>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal fade" id="despesas" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-image: linear-gradient(310deg, #212229 0%, #212529 100%);">
                <h6 class="modal-title white-color text-uppercase" id="modal-title">Atualizar Movimento</h6>
            </div>
            <div class="modal-body p-2">
                <div class="card card-plain">
                    <div class="card-body pb-2">
                        <form role="form text-left">
                            <div class="form-group">
                                <label for="nome"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Nome</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" id="nome" class="form-control"
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
                                    <input type="text" id="valor" class="form-control" placeholder="R$300,00"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <label for="valor"
                                class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                                Tipo de movimento
                            </label>
                            <div class="d-flex">
                                <input type="radio" class="btn-check" name="options-outlined" id="receita"
                                    autocomplete="off">
                                <label
                                    class="text-uppercase text-default text-sm font-weight-bolder btn btn-outline-success"
                                    for="receita">
                                    Receita
                                </label>

                                <input type="radio" class="btn-check" name="options-outlined" id="despesa"
                                    autocomplete="off">
                                <label
                                    class="text-uppercase text-default text-sm font-weight-bolder btn btn-outline-danger"
                                    for="despesa">
                                    Despesa
                                </label>


                                {{-- <button
                                    class="btn btn-icon btn-3 bg-gradient-success d-flex justify-content-center d-inline me-3"
                                    type="button">
                                    <i class="material-icons white-color f-left me-2" style="opacity: 100%">
                                        money_off
                                    </i>
                                    <span class="btn-inner--text white-color">Despesas</span>
                                </button>
                                <button
                                    class="btn btn-icon btn-3 bg-gradient-danger d-flex justify-content-center d-inline"
                                    type="button">
                                    <i class="material-icons white-color f-left me-2" style="opacity: 100%">
                                        money_off
                                    </i>
                                    <span class="btn-inner--text white-color">Despesas</span>
                                </button> --}}
                                {{-- <input type="checkbox" class="btn-check" id="receita" autocomplete="off">
                                <label class="btn btn-outline-success" for="receita">
                                    Receita
                                </label> --}}

                                {{-- <input type="checkbox" class="btn-check" id="despesa" autocomplete="off">
                                <label class="btn btn-outline-danger" for="despesa">Despesa</label> --}}

                            </div>



                            <div class="form-group">
                                <label for="vencimento"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                                    Data
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <input class="form-control" type="date" value="2022-01-01" id="vencimento">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="vencimento"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Data de
                                    vencimento</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <input class="form-control" type="date" value="2022-02-03" id="vencimento">
                                </div>
                            </div>

                            <label for="vencimento"
                                class="text-center text-uppercase text-default text-xxs font-weight-bolder">Status</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" value="" id="pago">
                                    <label class="custom-control-label" for="pago">
                                        Pago
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="" id="nao_pago">
                                    <label class="custom-control-label" for="nao_pago">
                                        Não pago
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="formaPagamento"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Forma
                                    de
                                    pagamento</label>
                                <select class="form-control" id="formaPagamento">
                                    <option value="0">Selecione...</option>
                                    <option value="1">Dinheiro</option>
                                    <option value="2">Cartão de débito</option>
                                    <option value="3">Cartão de crédito</option>
                                    <option value="4">Pix</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="categoria"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                                    Categoria
                                </label>
                                <select class="form-control" id="categoria">
                                    <option value="0">Selecione...</option>
                                    <option value="1">Casa</option>
                                    <option value="2">Educação</option>
                                    <option value="3">Eletrônicos</option>
                                    <option value="4">Lazer</option>
                                    <option value="5">Saúde</option>
                                    <option value="6">Supermercado</option>
                                    <option value="7">Transporte</option>
                                    <option value="8">Vestuário</option>
                                    <option value="9">Viagem</option>
                                    <option value="10">Outras</option>
                                </select>
                            </div>


                            {{-- <div class="form-group">
                                <label for="formaPagamento"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">
                                    Categoria
                                </label>
                                <select class="form-control" id="formaPagamento">
                                    <option value="0">Selecione...</option>
                                    <option value="1">Salário</option>
                                    <option value="2">Empréstimos</option>
                                    <option value="3">Investimentos</option>
                                    <option value="4">Outras</option>
                                </select>
                            </div> --}}


                            <div class="form-group">
                                <label for="descricao"
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Descrição</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" id="descricao" class="form-control"
                                        placeholder="Descrição" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-danger white-color" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn bg-success white-color">Atualizar</button>
            </div>
        </div>
    </div>
</div>

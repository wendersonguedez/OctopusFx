<div class="modal fade" id="despesas" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h6 class="modal-title white-color text-uppercase" id="modal-title">Registrar Receita</h6>
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
                                    Categoria
                                </label>
                                <select class="form-control" id="formaPagamento">
                                    <option value="0">Selecione...</option>
                                    <option value="1">Sal??rio</option>
                                    <option value="2">Empr??stimos</option>
                                    <option value="3">Investimentos</option>
                                    <option value="4">Outras</option>
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
                                    class="text-center text-uppercase text-default text-xxs font-weight-bolder">Descri????o</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" id="descricao" class="form-control" placeholder="Descri????o"
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
</div>

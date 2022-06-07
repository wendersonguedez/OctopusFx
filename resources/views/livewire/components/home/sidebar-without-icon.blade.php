<div class="fixed-plugin">
    <a href="#" class="px-3 d-flex icon-modal" data-bs-toggle="modal" data-bs-target="#despesas">
        <i class="fa fa-plus fs-4 text-light" aria-hidden="true"></i>
    </a>

    <div class="card shadow-lg">

        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Octopus FX</h5>
            </div>

            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>

        </div>

        <hr class="horizontal dark my-1">

        <div class="card-body pt-sm-3 pt-0 overflow-auto mt-2">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('home') }}">
                        <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center"
                            type="button">
                            <i class="material-icons white-color f-left" style="opacity: 100%">home</i>
                            <span class="btn-inner--text white-color" style="width: 100%">Página inicial</span>
                        </button>
                    </a>
                </div>
                <div class="col-12">
                    <a href="{{ route('receitas') }}">
                        <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center"
                            type="button">
                            <i class="material-icons white-color f-left" style="opacity: 100%">currency_exchange</i>
                            <span class="btn-inner--text white-color" style="width: 100%">Receitas</span>
                        </button>
                    </a>
                </div>
                <div class="col-12">
                    <a href="{{ route('despesas') }}">
                        <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center"
                            type="button">
                            <i class="material-icons white-color f-left" style="opacity: 100%">money_off</i>
                            <span class="btn-inner--text white-color" style="width: 100%">Despesas</span>
                        </button>
                    </a>
                </div>
                {{-- <div class="col-12">
                    <a href="{{ route('metas') }}">
                        <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center"
                            type="button">
                            <i class="material-icons white-color f-left" style="opacity: 100%">currency_exchange</i>
                            <span class="btn-inner--text white-color" style="width: 100%">Metas</span>
                        </button>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

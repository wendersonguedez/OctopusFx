<div class="fixed-plugin">
    <a href="#" class="px-3 py-2 d-flex icon-modal" data-bs-toggle="modal" data-bs-target="#despesas">
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
            <a href="{{ route('dashboard.home') }}">
                <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center" type="button">
                    <span class="btn-inner--icon"><i class="fa fa-home white-color"></i></span>
                    <span class="btn-inner--text white-color" style="width: 100%">Página inicial</span>
                </button>
            </a>

            <a href="{{ route('despesas.index') }}">
                <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center" type="button">
                    <span class="btn-inner--icon"><i class="fa fa-usd white-color" aria-hidden="true"></i></span>
                    <span class="btn-inner--text white-color" style="width: 100%">Despesas</span>
                </button>
            </a>

            {{-- <a href="{{ route('dashboard.receita') }}">
                <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center" type="button">
                    <span class="btn-inner--icon"><i class="fa fa-home white-color"></i></span>
                    <span class="btn-inner--text white-color" style="width: 100%">Receitas</span>
                </button>
            </a> --}}

            {{-- <a href="{{ route('dashboard.index') }}">
                <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center" type="button">
                    <span class="btn-inner--icon"><i class="fa fa-home white-color"></i></span>
                    <span class="btn-inner--text white-color" style="width: 100%">Falta pagar</span>
                </button>
            </a>

            <a href="{{ route('dashboard.index') }}">
                <button class="btn btn-icon btn-3 btn-black-gradient w-100 d-flex justify-content-center" type="button">
                    <span class="btn-inner--icon"><i class="fa fa-home white-color"></i></span>
                    <span class="btn-inner--text white-color" style="width: 100%">Desejos</span>
                </button>
            </a> --}}
        </div>
    </div>
</div>

@push('styles')
    <style>
        .icon-modal {
            justify-content: center;
            align-items: center;
            position: fixed;
            background: #47cfa3;
            z-index: 990;
            bottom: 0;
            right: 0;
            margin: 20px;
            height: 51.61px !important;
            width: 52px !important;
            box-shadow: 0 2px 12px 0 rgb(0 0 0 / 16%);
            border-radius: 50%;
        }

        .white-color {
            color: #ffffff;
        }

    </style>
@endpush

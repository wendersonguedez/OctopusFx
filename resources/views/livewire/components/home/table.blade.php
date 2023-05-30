<div class="spacing-top">
    <div class="row">
        <div class="col-md-6">
            <h3 class="title-section-home text-uppercase">Receitas</h3>
            <div class="card mt-4 mb-4">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-uppercase text-dark text-xs font-weight-bolder">Nome</th>
                                <th class="text-uppercase text-dark text-xs font-weight-bolder">
                                    Valor
                                </th>
                                <th class="text-uppercase text-dark text-xs font-weight-bolder">
                                    Data
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tableR as $t)
                            <tr>
                                <td>
                                    <img src="{{ url('img/money.png') }}" class="avatar avatar-sm"
                                        style="border-radius: 0px">
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="text-dark text-sm text-uppercase font-weight-bolder table-info">
                                            {{ $t->nome }}
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="text-dark text-sm text-uppercase font-weight-bolder">
                                            {{ (new NumberFormatter('pt_BR', NumberFormatter::CURRENCY))->format($t->valor) }}   
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="text-dark text-sm text-uppercase font-weight-bolder">
                                            {{ date('d/m/Y', strtotime($t->data_movimento)) }}
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h3 class="title-section-home text-uppercase">Despesas</h3>
            <div class="card mt-4">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-uppercase text-dark text-xs font-weight-bolder">Nome</th>
                                <th class="text-uppercase text-dark text-xs font-weight-bolder">
                                    Valor
                                </th>
                                <th class="text-uppercase text-dark text-xs font-weight-bolder">
                                    Data
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tableD as $t)
                                <tr>
                                    <td>
                                        <img src="{{ url('img/expense.png') }}" class="avatar avatar-sm"
                                            style="border-radius: 0px">
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark text-sm text-uppercase font-weight-bolder">
                                                {{ $t->nome }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark text-sm text-uppercase font-weight-bolder">
                                                {{ (new NumberFormatter('pt_BR', NumberFormatter::CURRENCY))->format($t->valor) }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark text-sm text-uppercase font-weight-bolder">
                                                {{ date('d/m/Y', strtotime($t->data_movimento)) }}
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        /* Quando o tamanho da viewport for < que 575px, o estilo abaixo será aplicado. */
        @media only screen and (max-width: 575px) {
            .title-section-home {
                color: #344767;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                font-size: 20px;
            }
        }

        /* Quando o tamanho da viewport for >= que 575px, o estilo abaixo será aplicado */
        @media only screen and (min-width: 575px) {
            .title-section-home {
                color: #344767;
                font-family: 'Montserrat', sans-serif;
                font-size: 25px;
            }

            .spacing-top {
                margin-top: 2.5rem;
            }
        }

        @media screen,
        print {
            background-color: red;
        }
    </style>
@endpush

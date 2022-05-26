<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard.home') }}">
                <i class="fa fa-home text-dark"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('despesas.index') }}" class="text-dark">Despesas</a>
        </li>
    </ol>
</nav>

@push('styles')
    <style>
        .breadcrumb {
            background: #fff
        }

    </style>
@endpush

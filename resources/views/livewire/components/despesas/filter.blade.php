<button class="btn btn-icon btn-3 btn bg-gradient-info" type="button" data-bs-toggle="collapse"
    data-bs-target="#data-filter" aria-expanded="false" aria-controls="data-filter">
    <span class="btn-inner--icon">
        <i class="fa fa-filter" style="margin-left: -10px"></i>
    </span>
    <span style="margin-left: 10px">Qual período gostaria de filtrar?</span>
</button>
<div class="collapse" id="data-filter">
    <div class="card card-body mb-4 d-flex justify-content-center" style="background: transparent; box-shadow: none">
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-3 col-6">
                <div class="form-group">
                    <label for="periodo-inicial" class="form-control-label white-color">Período inicial</label>
                    <input class="form-control" type="date" value="2022-01-01" id="periodo-inicial">
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="form-group">
                    <label for="periodo-final" class="form-control-label white-color">Período final</label>
                    <input class="form-control" type="date" value="2022-01-31" id="periodo-final">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <button type="button" class="btn bg-gradient-success" style="width: 200px">Projetar</button>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .col-md-6 {
            flex: 0 0 auto;
            width: 8%;
        }

        .col-4 {}

    </style>
@endpush


{{-- <div class="row">
    <div class="col-md-3 col-sm-6 col-6">
        <div class="form-group">
            <label for="periodo-inicial" class="form-control-label white-color">Período inicial</label>
            <input class="form-control" type="date" value="2018-11-23" id="periodo-inicial">
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-6">
        <div class="form-group">
            <label for="periodo-final" class="form-control-label white-color">Período final</label>
            <input class="form-control" type="date" value="2018-11-23" id="periodo-final">
        </div>
    </div>
</div> --}}

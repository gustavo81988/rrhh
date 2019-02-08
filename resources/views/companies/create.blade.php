@extends('material-dashboard-pro.index')
@section('content')
<div class="col-md-12">
    <form method="POST" action="{{route('company.store')}}">
    @csrf
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">Crear Empresa</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-10 offset-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="name" class="bmd-label-floating">
                                    Nombre
                                </label>
                                <input required type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="email" class="bmd-label-floating">
                                    Email
                                </label>
                                <input required type="email" name="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="phone" class="bmd-label-floating">
                                    Teléfono
                                </label>
                                <input required type="text" name="phone" class="form-control" id="phone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-rose">
                Enviar<div class="ripple-container"></div>
            </button>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </form>
</div>
@endsection

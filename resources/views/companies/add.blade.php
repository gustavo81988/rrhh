@extends('material-dashboard-pro.index')
@section('content')
<div class="col-md-12">
    <form method="POST" action="{{route('company.add')}}">
    @csrf
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">Agregar Empresa</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-10 offset-1">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name" class="bmd-label-floating">
                                    Nombre
                                </label>
                                <input disabled type="text" value="{{$user->name}}" class="form-control" id="name">
                                <input type="hidden" name="user_id" value="{{$user->id}}" class="form-control" id="id">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 offset-1">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <select class="form-control" name="company_id" >
                                    <option selected disabled value="">Empresa</option>
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-rose">
                Agregar<div class="ripple-container"></div>
            </button>
        </div>
    </div>
    </form>
</div>
@endsection

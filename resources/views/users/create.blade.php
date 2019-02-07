@extends('material-dashboard.index')
@section('content')
<div class="col-md-12">
    <form method="POST" action="{{route('user.store')}}">
    @csrf
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">Crear Usuario</h4>
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
                                <input required type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="phone" class="bmd-label-floating">
                                    Password
                                </label>
                                <input required type="password" name="password" class="form-control" autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 offset-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select required class="form-control" name="company_id" >
                                    <option selected disabled value="">Empresa</option>
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 offset-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select required class="form-control" name="role" >
                                    <option selected disabled value="">Roll</option>
                                    <option value="admin">Admin</option>
                                    <option value="manager">Gerente</option>
                                    <option value="padmin">Administrador de Personal</option>
                                    <option value="user">Usuario</option>
                                </select>
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

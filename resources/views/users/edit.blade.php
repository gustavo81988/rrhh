@extends('material-dashboard.index')
@section('content')
<div class="col-md-12">
    <form method="POST" action="{{route('user.update',$user->id)}}">
    @csrf
    @method('PUT')
    <div class="card ">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">Actualizar Datos de Usuario</h4>
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
                                <input required value="{{$user->name}}" type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="email" class="bmd-label-floating">
                                    Email
                                </label>
                                <input required value="{{$user->email}}" type="email" name="email" class="form-control">
                            </div>
                        </div>
                    
                    </div>
                </div>

                <div class="col-sm-10 offset-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select required class="form-control" name="role" >
                                    <option selected disabled value="">Roll</option>
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
                Actualizar<div class="ripple-container"></div>
            </button>
        </div>
    </div>
    </form>
</div>
@endsection

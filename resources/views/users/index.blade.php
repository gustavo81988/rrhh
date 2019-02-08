@extends('material-dashboard-pro.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Lista de Usuarios</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="example">
                  <thead class=" text-primary">
                      <th>Nombre</th>
                      <th>Correo Electronico</th>
                      <th>Cargo</th>
                      @if(Auth::user()->role == 'admin')
                          <th></th>
                      @endif
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                        <tr>
                            <td>
                                <a href="{{route('user.edit',$user->id)}}">
                                    {{$user->name}}
                                </a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            @if(Auth::user()->role == 'admin')
                                @if(!(Auth::user()->id == $user->id))
                                    <form method="POST" action="{{route('user.destroy',$user->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <td><button type="submit" name="button">{{$user->active ? 'X' : 'O'}}</button></td>
                                    </form>
                                @else
                                    <td></td>
                                @endif
                            @endif
                        </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

    @section('scripts')
        <script type="text/javascript">
            $(document).ready(function(){
                $('#example').dataTable({
                    responsive: {
                        breakpoints: [
                            {name: 'bigdesktop', width: Infinity},
                            {name: 'meddesktop', width: 1480},
                            {name: 'smalldesktop', width: 1280},
                            {name: 'medium', width: 1188},
                            {name: 'tabletl', width: 1024},
                            {name: 'btwtabllandp', width: 848},
                            {name: 'tabletp', width: 768},
                            {name: 'mobilel', width: 480},
                            {name: 'mobilep', width: 320}
                        ]
                    },
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                    }
                });
            });
        </script>
    @endsection
@endsection

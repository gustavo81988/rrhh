<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="#pablo">Dashboard</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form" method="POST" action="{{route('company.select')}}">
            @csrf
            <div class="form-group">
                <select onChange="this.form.submit()" class="form-control" name="company_id" >
                    <option selected disabled value="">Empresa</option>
                    @foreach (Auth::user()->companies as $key => $value)
                        <option {{(Auth::user()->company == $key) ? 'selected' : ''}} value="{{$key}}">
                            {{$value}}
                        </option>
                    @endforeach
                </select>
            </div>
        </form>
      <ul class="navbar-nav">
        <li class="nav-item" style="padding:15px">
            <a href="{{ route('logout') }}" >Cerrar sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

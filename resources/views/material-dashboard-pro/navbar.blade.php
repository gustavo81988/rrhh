<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize">
        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
          <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
          <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
        </button>
      </div>
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
        <div class="input-group no-border">
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
        {{-- <li class="nav-item">
          <a class="nav-link" href="#pablo">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              Stats
            </p>
          </a>
        </li> --}}
        {{-- <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
            <p class="d-lg-none d-md-block">
              Some Actions
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Mike John responded to your email</a>
            <a class="dropdown-item" href="#">You have 5 new tasks</a>
            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
            <a class="dropdown-item" href="#">Another Notification</a>
            <a class="dropdown-item" href="#">Another One</a>
          </div>
        </li> --}}

        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              Cuenta
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="#">Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión</a>
          </div>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

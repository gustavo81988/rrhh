<div class="sidebar" data-color="rose" data-image="{{asset('/material-dashboard/assets/img/sidebar-1.jpg')}}">
    <div class="logo">
        {{-- <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        <img src="{{asset('svg/overall_blue.svg')}}" alt="">
        </a> --}}
        <a href="{{route('home')}}" class="logo-normal">
            <img style="padding:10px" src="{{asset('svg/overall_blue.svg')}}" alt="">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="nav-item active ">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#administrator">
                    <i class="material-icons">apps</i>
                    <p> Administrador
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="administrator">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Usuarios </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Puesto de Trabajo
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="componentsCollapse">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Títulos de los Puestos </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Escalas Salariales </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Estado del Empleado </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Categorías de Puestos </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Turnos de trabajo </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#organization">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Organización
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="organization">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Información General </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Localización </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Estructura </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#resume">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Currículum
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="resume">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Habilidades </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Formación </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Licencias </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Idiomas </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Membresías </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Nacionalidades </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#config">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Configuración
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="config">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Configuración de correo </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Subscripciones de Correo </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Localización </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Módulos </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Membresías </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            @endif

            @if(Auth::user()->role == 'admin')
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">image</i>
                    <p>
                        Empresas
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('company.index')}}">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Lista </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('company.create')}}">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Crear </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#pim">
                    <i class="material-icons">image</i>
                    <p>
                        Informacion Personal
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pim">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Configuracion </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('home')}}">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Lista de Empleados </span>
                            </a>
                        </li>
                        @if(Auth::user()->role == 'admin')
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('company.user')}}">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Agregar Empleados </span>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Reportes </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#license">
                    <i class="material-icons">image</i>
                    <p>
                        Licencias y Permisos
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="license">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Listado </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Solicitar </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Mis Permisos</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#auth">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Autorizaciones
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="auth">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Agregar </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Autorizaciones del Empleado </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Mis Derechos </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#leavereport">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Reportes
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="leavereport">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Permisos y ausencias </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Licencias y Permisos </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#leaveconfig">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Configurar
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="leaveconfig">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Período de Permiso </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Tipos de Permisos </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Semana Laboral </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Asignar Permiso </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#time">
                    <i class="material-icons">image</i>
                    <p>
                        Tiempo
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="time">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#timesheet">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Hoja de Asistencia
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="timesheet">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Mis Hojas </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Hojas de Empleados </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#atendance">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Asistencia
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="atendance">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Mis Registros </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Marcar </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal">Registro de Empleados</span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal">Configuración</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#timereports">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Reportes
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="timereports">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Proyectos </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Empleados </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal">Asistencia</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#projectinfo">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Inf. del Proyecto
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="projectinfo">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Clientes </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Proyectos </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#recruitment">
                    <i class="material-icons">image</i>
                    <p>
                        Reclutamiento
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="recruitment">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Candidatos </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Vacantes </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Mi Información </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#performance">
                    <i class="material-icons">image</i>
                    <p>
                        Desempeño
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="performance">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#performanceconfig">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal"> Configurar
                                <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="performanceconfig">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal">KPI's </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Trackers </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#managetests">
                                <span class="sidebar-mini"> &nbsp; </span>
                                <span class="sidebar-normal">
                                    Evaluaciones
                                    <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="managetests">
                                <ul class="nav">

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal">Administrar</span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Mis Evaluaciones </span>
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Revisar Lista </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Mis Busquedas </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini">&nbsp;</span>
                                <span class="sidebar-normal"> Buscadores de Empleo </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



        </ul>
    </div>
<div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div>
</div>

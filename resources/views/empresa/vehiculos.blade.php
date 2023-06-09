<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="#"/>
    <link rel="icon" type="image/png" href="../images/logo.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="title" content="Ask online Form" />
    <meta
      name="description"
      content="Vanchi is a Material unique admin template built with tiles concept. It comes with Different dashboard layouts, fully responsive HTML pages and, colorful widgets."
    />
    <meta
      name="keywords"
      content="mobilewebdevelopment,HTML, CSS, JavaScript,Material,js,Forum ,webdesign ,website ,web ,webdesigner ,webdevelopment,Template,admin,dashboard,ebsitedesig,themeym,radwanweb,frontend-with-radwan"
    />
    <meta name="robots" content="index, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <title>timbus</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="../css/fontawesome-all.min.css" />
    <link href="../css/materil.css" rel="stylesheet" />
    <link href="../css/custom.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet" />
  </head>

  <body class="">
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="orange"
        data-background-color="white"
        data-image=""
      >
        <div class="logo">
           <a href="./index.html" class="simple-text logo-normal">
            <img src="../images/tambo.jpg" alt="transporte" />
           </a>
        </div>

        <div class="sidebar-wrapper">
          <ul class="nav">


            <li class="nav-item">
              <a class="nav-link" href="{{ route('empresa') }}">
                <img class="mr-2" src="../img/ic_view_quilt_24px.png" />
                Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('perfilEmpresa') }}">
                <img class="mr-2" src="../img/Group 1380.png" />
                Perfil
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('rutaEmpresa') }}">
                <img class="mr-2" src="../bootstrap-icons/truck.svg" />
                Ruta
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('institucionesVinculadas') }}">
                <img class="mr-2" src="../img/Group 1382.png" />
                Instituciones Vinculadas
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagoInstitucionesE') }}">
                <img class="mr-2" src="../bootstrap-icons/cash-coin.svg" />
                Pago Instituciones
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('registroVehiculo') }}">
                <img class="mr-2" src="../bootstrap-icons/pencil-fill.svg" />
                Registro Vehiculo
              </a>
            </li>

           <li class="nav-item">
                <a class="nav-link" href="{{ route('Vehiculos') }}">
                    <img class="mr-2" src="../bootstrap-icons/pin-map-fill.svg" />
                    Vehiculos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('conductoresEmpresa')}}">
                    {{--  --}}
                    <img class="mr-2" src="../bootstrap-icons/person-badge-fill.svg" />
                Conductores
                </a>
            </li>


          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="
            navbar navbar-expand-lg navbar-transparent navbar-absolute
            fixed-top
          "
        >
          <div class="container-fluid padi">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:;">Rapido Tambo</a>
            </div>


            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse">

              <form class="navbar-form">
                <!-- <div class="input-group custom-input no-border"> -->
                  <!-- <input
                    type="text"
                    value=""
                    class="form-control"
                    placeholder=""
                  /> -->
                  <!-- <button
                    type="submit"
                    class="btn btn-danger btn-round btn-just-icon"
                  >
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button> -->
                <!-- </div> -->
              </form>

              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="http://example.com"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="material-icons">notifications</i>
                    <span class="notification">3</span>
                    <p class="d-lg-none d-md-block">Some Actions</p>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <a class="dropdown-item" href="#"
                      >Yonier email</a
                    >
                    <a class="dropdown-item" href="#">Ruta Pendiente</a>
                    <a class="dropdown-item" href="#"
                      >Pago Trabsporte 01-12-2021</a
                    >
                    <a class="dropdown-item" href="#">Alerta de Demora de transporte</a>
                    <a class="dropdown-item" href="#">Mas</a>
                  </div>
                </li>


                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="javascript:;"
                    id="navbarDropdownProfile"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">Account</p>
                    <span class="hide-arrow-admin-text">
                      Tambo
                      <i class="material-icons">arrow_drop_down</i>
                    </span>
                  </a>

                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownProfile"
                  >
                    <a class="dropdown-item" href="user-profile.html">Perfil</a>
                    <a class="dropdown-item" href="#">Configuraciones</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../index.html">Log out</a>
                  </div>
                </li>

                <!-- boton de salir-->
                @if (Auth::user())
                {{-- <form method="POST" action="{{route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-warning">Salir</button>
                </form> --}}
                @else

                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}" id="testimonio">Registrarme</a>
                 </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}" id="contacto">Iniciar sesion</a>
                </li>
                @endif








              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->


        <div class="content">
          <div class="container-fluid">
            <div class="row">




                <table class="table-info col-12 table-hover">
                    <thead>
                      <tr class="table-danger">
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">marca</th>
                        <th scope="col">placa</th>
                        <th scope="col">modelo</th>
                        <th scope="col">Soat</th>
                        <th scope="col">Cilindraje</th>
                        <th scope="col">Fecha Creacion</th>
                        <th scope="col">Funciones</th>

                      </tr>
                    </thead>

                    <tbody>

                        @foreach($vehiculos as $vehiculo)
                      <tr>
                            {{-- <th scope="row">{{$institucion->id}}</th> --}}
                            <td>{{$vehiculo->marca}}</td>
                            <td>{{$vehiculo->placa}}</td>
                            <td>{{$vehiculo->modelo}}</td>
                            <td>{{$vehiculo->soat}}</td>
                            <td>{{$vehiculo->cilindraje}}</td>
                            <td>{{$vehiculo->created_at}}</td>

                             <td>
                                 <a href="{{ route('editarVehiculo.edit', $vehiculo) }} ">

                                        <button type="button" class="btn-warning btn-sm">editar</button></a>

                                      <form action="{{route('eliminarVehiculo.destroy', $vehiculo)}}"  class="d-inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                      </form>
                            </td>

                        </tr>

                        @endforeach

                    {{$vehiculos->links()}}


                    </tbody>
                    </table>



                  </div>
                </div>
              </div> -->

            </div>


          </div>
        </div>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap-material-design.min.js"></script>
    <script src="../js/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../js/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../js/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../js/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../js/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../js/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../js/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../js/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../js/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../js/fullcalendar.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../js/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="../js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../js/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script
      src="../js/material-dashboard.min.js?v=2.1.2"
      type="text/javascript"
    ></script>
    <script src="../js/main.js"></script>

    <script>

    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <link rel="icon" type="image/png" href="../images/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Ask online Form">
    <meta name="description"
        content="Vanchi is a Material unique admin template built with tiles concept. It comes with Different dashboard layouts, fully responsive HTML pages and, colorful widgets.">
    <meta name="keywords"
        content="mobilewebdevelopment,HTML, CSS, JavaScript,Material,js,Forum ,webdesign ,website ,web ,webdesigner ,webdevelopment,Template,admin,dashboard,ebsitedesig,themeym,radwanweb,frontend-with-radwan">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <title>Institucion</title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="./css/fontawesome-all.min.css">
    <link href="../css/materil.css" rel="stylesheet" />
    <link href="../css/custom.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet" />
    <link href="../css/bootstrap1.css" rel="stylesheet" />
  </head>

  <body class="">
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="orange"
        data-background-color="white"
        data-image="../assets/img/sidebar-1.jpg"
      >
        <div class="logo">
          <a href="./index.html" class="simple-text logo-normal">
            <img src="../images/yonier.jpg" alt="logo" />
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                     {{-- {{route('dashboard')}} --}}
                  <img class="mr-2" src="../img/ic_view_quilt_24px.png" />
                  Dashboard
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('perfil') }}">
                    {{-- {{route('perfilEstudiante')}} --}}
                  <img class="mr-2" src="../img/Group 1380.png" />
                  Perfil
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('rutaEstudiante') }}">
                  <img class="mr-2" src="../bootstrap-icons/truck.svg"/>
                  Ruta
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('institucionEstudiante') }}">
                  <img class="mr-2" src="../img/Group 1382.png" />
                  Institucion
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('pagoTransporte') }}">
                  <img class="mr-2" src="../bootstrap-icons/cash-coin.svg" />
                  Pago Transporte
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('buscarRuta') }}">
                  <img class="mr-2" src="../bootstrap-icons/search.svg" />
                  Buscar Ruta
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
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:;">Institucion</a>
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
                <!-- <div class="input-group custom-input no-border">
                  <input
                    type="text"
                    value=""
                    class="form-control"
                    placeholder="Search..."
                  />
                  <button
                    type="submit"
                    class="btn btn-danger btn-round btn-just-icon"
                  >
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div> -->
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
                      >Mike John responded to your email</a
                    >
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#"
                      >You're now friend with Andrew</a
                    >
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
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
                      yonier
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
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->


        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card custom-user-info-card">

                  <div class="card-body custom-user-table-data">

                      <table class="table">




                              <h2>Rutas</h2>

                                <form class="form-inline">
                                  <input class="form-control mr-sm-2 btn btn-outline-success" type="search" placeholder="Buscar" aria-label="Search">
                                  <button class="btn btn-outline-success my-2 my-sm-2" type="submit">Buscar</button>
                                </form>


                                {{-- <div class="input-group">
                                    <div class="form-outline">
                                      <input type="search" id="form1" class="form-control" />
                                      <label class="form-label" for="form1">Search</label>
                                    </div>
                                    <button type="button" class="btn btn-primary">
                                      <i class="fas fa-search"></i>
                                    </button>
                                  </div> --}}


                                  {{-- <div class="input-group">
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                    aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-outline-primary">search</button>
                                  </div> --}}


                                  {{-- <div class="input-group">
                                    <div class="form-outline">
                                      <input id="search-input" type="search" id="form1" class="form-control" />
                                      <label class="form-label" for="form1">Search</label>
                                    </div>
                                    <button id="search-button" type="button" class="btn btn-primary">
                                      <i class="fas fa-search"></i>
                                    </button>
                                  </div> --}}


                              <table class="table-info col-20">
                                <thead>
                                  <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">nombre</th>
                                    {{-- <th scope="col">nombre</th>
                                    <th scope="col">telefono</th>
                                    <th scope="col">direccion</th>
                                    <th scope="col">correo</th> --}}
                                  </tr>
                                </thead>

                                <tbody>

                                    @foreach ($rutas as $ruta)
                                  <tr>
                                        {{-- <th scope="row">{{$institucion->id}}</th> --}}
                                        <td>{{$ruta->nombre}}</td>

                                        <td>
                                            <a href="{{ route('vincularce', $ruta)}}">
                                                {{--  --}}
                                                <button type="button" class="btn btn-success  btn-sm">Vincular</button></a>

                                                {{-- <form action="{{ route('paciente.destroy', $paciente) }}" class="d-inline" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button></a>
                                                </form> --}}
                                        </td>

                                    </tr>

                                    @endforeach

                                {{-- {{$rutas->links()}} --}}

                                </tbody>
                                </table>




                      </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fixed-plugin"></div>
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

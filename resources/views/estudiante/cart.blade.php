<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#" />
    <link rel="icon" type="image/png" href="../images/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <title>Pago Transporte</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="./css/fontawesome-all.min.css" />
    <link href="../css/materil.css" rel="stylesheet" />
    <link href="../css/custom.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet"/>
    <link href="../css/stylesUs.css" rel="stylesheet"/>

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

              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('buscarRuta') }}">
                  <img class="mr-2" src="../bootstrap-icons/search.svg" />
                  Buscar Ruta
                </a>
              </li> --}}

              <li class="nav-item">
                <a class="nav-link" href=" {{ route('EmpresasAgregadas') }}">
                  <img class="mr-2" src="../bootstrap-icons/back.svg" />
                  Empresas Agregadas
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
              <a class="navbar-brand" href="javascript:;">Empresas Agregadas</a>
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
                        <div class="table-responsive">

                                                     <!-- tabla verdadera -->

                          <div class="container" style="margin-top: 20px">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Empresas</li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart-"!"</li>
                                </ol>
                            </nav>




                            <table class="table-responsive col-20 table-hover " style="font-size: calc(0.50rem + 0.3vw"> {{-- table-info col-20 table-hover --}}
                                <thead style=" font-size: calc(0.50rem + 0.3vw)">
                                    <tr class="thead-dark table-danger" >
                                        {{-- <th scope="col">#</th> --}}
                                        {{-- <th>id</th>scope="col" --}}
                                        {{-- <th scope="col">Id</th> --}}
                                        <th scope="col">Nombre Empresa</th>
                                        <th scope="col">Logo Empresa</th>

                                        <th scope="col">Direccion Empresa</th>
                                        <th scope="col">Telefono Empresa</th>
                                        <th scope="col">Correo Empresa</th>
                                        <th scope="col">Descripcion Ruta</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Horario</th>



                                        {{-- <th scope="col">ID Ruta</th> --}}
                                        <th scope="col">Ruta</th>
                                        <th scope="col">Eliminar</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($cartCollection as $cartCollectionBB)
                                    {{-- Cart::getContent() --}}
                                    <tr>
                                        {{-- <th scope="row">{{$institucion->id}}</th> --}}
                                        {{-- <td>{{$cartCollectionBB->id}}</td> --}}
                                        <td>{{$cartCollectionBB->nombre}}</td>
                                        <td><img src="{{asset('img/'.$cartCollectionBB->imagenT)}}" alt="" width="100" height="100"></td>
                                        <td>{{$cartCollectionBB->direccion}}</td>
                                        <td>{{$cartCollectionBB->telefono}}</td>
                                        <td>{{$cartCollectionBB->correo}}</td>
                                        {{-- <td>{{$cartCollectionBB->id_ruta}}</td> --}}

                                        {{-- <td>{{$rutasY_em->imagenT}}</td> --}}
                                        <td>{{$cartCollectionBB->descripcion}}</td>
                                        <td>{{$cartCollectionBB->precio}}</td>
                                        <td>{{$cartCollectionBB->horario}}</td>


                                        {{-- <td>{{$rutasY_em->imagen}}</td> --}}
                                        <td><img src="{{asset('img/'.$cartCollectionBB->imagen)}}" alt="" width="100" height="100"></td>



                                        <td>
                                            <a href="">
                                                {{-- {{ route('editEmpresa', $empresa) }} --}}
                                                {{-- <button type="button" class="btn-warning btn-sm">
                                                    editar
                                                </button></a> --}}

                                            <form action="{{ route('cart.remove', $cartCollectionBB->id)}}" class="d-inline" method="POST">
                                                {{--  --}}
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    X
                                                </button>


                                                {{-- <input type="hidden" name="id" value="{{$cartCollectionBB->id}}"> --}}

                                                {{-- <button type="submit" class="btn btn-danger btn-sm">
                                                    Eliminar
                                                </button> --}}

                                                {{-- btn-sm text-left text-primary btn btn-outline:none-success border:none --}}

                                                {{-- <button type="submit" class="btn btn btn-sm border-danger"
                                                style="margin-left: 1px margin-left: 1%  padding-left: 2px" >

                                                    Delete

                                                </button> --}}

                                                {{-- <div class="d-grid gap-2 d-md-block ">
                                                    <button class="btn btn-primary " type="button ">Eliminar</button>

                                                </div> --}}

                                            </form>
                                        </td>


                                    </tr>

                                    @endforeach

                                    {{-- {{$rutasY_ems->links()}} --}}


                                </tbody>
                            </table>


                        </div>
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

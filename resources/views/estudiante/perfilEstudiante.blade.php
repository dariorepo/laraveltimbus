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
    <meta name="language" content="Spanish" />
    <title>Perfil</title>
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
                <a class="nav-link" href="{{ route('pagoTransporte')}}">
                  <img class="mr-2" src="../bootstrap-icons/cash-coin.svg"/>
                  Pago Transporte
                </a>
              </li>

              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('buscarRuta') }}">
                  <img class="mr-2" src="../bootstrap-icons/search.svg" />
                  Buscar !I! Ruta
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
              <a class="navbar-brand" href="javascript:;">Perfil de Usuario</a>
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
                      Yonier
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
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header card-header-warning">
                    <div class="float-left">
                      <a
                        ><span
                          class="mr-2 custom-material-icon"
                          style="line-height: 4"
                        >
                          <img src="../img/Group 1380.png" /> </span
                        ><span>Editar Perfil</span></a
                      >
                    </div>
                  </div>
                  <div class="card-body">


<form action="" method="POST">
                        {{--   {{route('perfilUsuarioYonier.Update', $estudiantes2 )}}          --}}
                        {{-- ->toArray() --}}

                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Primer Nombre</label>
                                    <input type="text" name="name" class="form-control" value="{{$estudiantes2->name}}" />
                                    {{-- --}}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Apellido</label>
                                    <input type="text" name="apellido" class="form-control" value="{{$estudiantes2->apellido}}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{$estudiantes2->email}}" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Telefono</label>
                                    <input type="text" name="telefono" class="form-control" value="{{$estudiantes2->telefono}}" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">

                            <div class="col-md-6">
                                <div class="form-group profile-upload">
                                    <div class="file-field">
                                        <div class="mb-4">
                                            <img src="../img/Group 1380.png" class="
                                                        rounded-circle
                                                        z-depth-1-half
                                                        avatar-pic
                                                      " alt="example placeholder avatar" />
                                        </div>
                                        <div class="d-flex justify-content-left">
                                            <div class="btn-mdb-color btn-rounded float-left">
                                                <span class="ml-3">Add foto</span>
                                                <input type="file" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <div class="col-md-6 profile-save-btn">
                                {{-- <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button> --}}
                                <button href="" class="btn btn-warning" type="submit">Guardar</button>

                            </div>


                        </div>

                        {{-- <div class="clearfix"></div> --}}
                    </form>



                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-profile">
                  <div class="card-avatar">
                    <a href="javascript:;">
                      <img class="img" src="../images/yonier.jpg" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-gray">
                      Yonier Dario Trompeta vera
                    </h6>
                    <h4 class="card-title">User</h4> <!-- Admin-->
                    <span class="card-description pt-3">
                      <p>ydtrompeta@misena.edu.co</p>
                      <p>+57 3219137495</p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header card-header-warning">
                    <div class="float-left">
                      <a
                        ><span
                          class="mr-2 custom-material-icon"
                          style="line-height: 4"
                        >
                          <img src="../img/Group 1380.png" /> </span
                        ><span>Editar Datos</span></a
                      >
                    </div>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating"
                              >Contraseña actual</label
                            >
                            <input type="password" class="form-control" value="" />
                            {{-- {{$estudiantes2->password}} --}}
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating"
                              >Nueva Contraseña</label
                            >
                            <input type="password" class="form-control"/>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating"
                              >Conformar Contraseña</label
                            >
                            <input type="password" class="form-control" />
                          </div>
                        </div>
                      </div>

                      <div class="row mt-5">
                        <div class="col-md-12 profile-save-btn">
                          {{-- <button type="submit" class="btn btn-primary">
                            Guardar
                          </button> --}}
                          <button href="" class="btn btn-warning" type="submit">Guardar</button>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </form>
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

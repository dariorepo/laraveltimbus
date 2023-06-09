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
           <a href="./dashboard.blade.php" class="simple-text logo-normal">
            <img src="../bootstrap-icons/admin.svg" alt="usuario" />
           </a>
        </div>

        <div class="sidebar-wrapper">
          <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin') }}">
                  <img class="mr-2" src="../img/ic_view_quilt_24px.png" />
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('estudiantes') }}">
                  <img class="mr-2" src="../img/Group 1380.png" />
                  Estudiantes
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('instituciones')}}">
                  <img class="mr-2" src="../img/Group 1382.png"/>
                  Instituciones
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('empresas')}}">
                  <img class="mr-2" src="../bootstrap-icons/building.svg" />
                  Empresas
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('conductores')}}">
                  <img class="mr-2" src="../bootstrap-icons/person-badge-fill.svg" />
                  Conductores
                </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="{{ route('pagoEstudiantes') }}">
                    <img class="mr-2" src="../bootstrap-icons/cash.svg" />
                    Pago Estudiantes
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('pagoInstituciones')}}">
                    <img class="mr-2" src="../bootstrap-icons/bar-chart-fill.svg" />
                    Pago Instituciones
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('vehiculos') }}">
                    <img class="mr-2" src="../bootstrap-icons/truck.svg"/>
                    Vehiculos
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('rutas')}}">
                    <img class="mr-2" src="../bootstrap-icons/geo-alt-fill.svg" />
                    Rutas
                  </a>
                </li>



          </ul>
        </div>
      </div>








<div class="main-panel">

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card custom-user-info-card">

                        <div class="card-body custom-user-table-data">
                            <div class="table-responsive">
                                <table class="table">
                                    <h2 class="text-success">
                                        Instituciones
                                    </h2>

                                    <table class="table-info col-20 table-hover">
                                        <thead>
                                            <tr class="table-danger">
                                                {{-- <th scope="col">#</th> --}}
                                                <th scope="col">id</th>
                                                <th scope="col">nit</th>
                                                <th scope="col">nombre</th>
                                                <th scope="col">telefono</th>
                                                <th scope="col">direccion</th>
                                                <th scope="col">correo</th>
                                                <th scope="col">password</th>
                                                <th scope="col">creacion</th>
                                                <th scope="col">acciones</th>




                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach($instituciones as $institucion)
                                            <tr>
                                                {{-- <th scope="row">{{$institucion->id}}</th> --}}
                                                <td>{{$institucion->id}}</td>
                                                <td>{{$institucion->nit}}</td>
                                                <td>{{$institucion->nombre}}</td>
                                                <td>{{$institucion->telefono}}</td>
                                                <td>{{$institucion->direccion}}</td>
                                                <td>{{$institucion->correo}}</td>
                                                <td>{{$institucion->password}}</td>
                                                <td>{{$institucion->created_at}}</td>


                                                <td>
                                                    <a href="{{ route('editInstitucion', $institucion) }}">
                                                        <button type="button"
                                                            class="btn-warning btn-sm">editar</button></a>

                                                    <form
                                                        action="{{route('eliminarInstitucion.destroy', $institucion)}}" class="d-inline" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </td>

                                            </tr>

                                            @endforeach

                                            {{$instituciones->links()}}


                                        </tbody>
                                    </table>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                </article>
            </div>

        </div>
    </div>
</div>









          </div>
        </div>
      </div>
    </div>

    <!--Core JS Files-->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-material-design.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Plugin for the momentJs-->
    <script src="js/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="js/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="js/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="js/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="js/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="js/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="js/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script
      src="js/material-dashboard.min.js?v=2.1.2"
      type="text/javascript"
    ></script>
    <script src="js/main.js"></script>


    <script>

    // </script>
  </body>
</html>

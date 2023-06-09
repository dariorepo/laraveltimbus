
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="css/app.css"  rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css"  rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.min"  rel="stylesheet">
    <link rel="stylesheet" href="css/materil.css"  rel="stylesheet">
    <link rel="stylesheet" href="css/responsive.css"  rel="stylesheet">
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <title>timbus</title>

</head>
<body>
     <!-- Navbar nuevo -->
     <nav
     class="
       navbar navbar-expand-lg navbar-transparent navbar-absolute
       fixed-top
     "
   >
     <div class="container-fluid padi">

       <div class="navbar-wrapper">
         <a class="navbar-brand" href="javascript:;">..</a>
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
            {{-- <div class="input-group custom-input no-border">
                <input type="text" value="" class="form-control" placeholder="buscar" />
                <button type="submit" class="btn btn-danger btn-round btn-just-icon">
                    <i class="material-icons">Buscar</i>
                    <div class="ripple-container"></div>
                </button>
            </div> --}}
        </form>

        <ul class="navbar-nav">

           <li class="nav-item dropdown">
               <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                   <i class="material-icons">notifications</i>
                   <span class="notification">3</span>
                   <p class="d-lg-none d-md-block">Some Actions</p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="#">Yonier email</a>
                   <a class="dropdown-item" href="#">Ruta Pendiente</a>
                   <a class="dropdown-item" href="#">Pago Trabsporte 01-12-2021</a>
                   <a class="dropdown-item" href="#">Alerta de Demora de transporte</a>
                   <a class="dropdown-item" href="#">Mas</a>
               </div>
           </li>


           <li class="nav-item dropdown">

               <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                   <i class="material-icons">person</i>
                   <p class="d-lg-none d-md-block">Account</p>
                   <span class="hide-arrow-admin-text">
                       yonier
                       <i class="material-icons">arrow_drop_down</i>
                   </span>
               </a>


               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                   <a class="dropdown-item" href="{{ route('perfil') }}">Perfil</a>
                   <a class="dropdown-item" href="#">Configuraciones</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="../index.html">Log out</a>
               </div>
           </li>

       </ul>

       </div>

       {{-- @if (Auth::user())
       <form method="POST" action="{{route('logout') }}">
           @csrf
           <button type="submit" class="btn btn-warning">Salir</button>
       </form>
       @else

       <li class="nav-item">
           <a class="nav-link" href="{{route('register')}}" id="testimonio">Registrarme</a>
        </li>

       <li class="nav-item">
           <a class="nav-link" href="{{route('login')}}" id="contacto">Iniciar sesion</a>
       </li>
       @endif --}}


       </div>
       </nav>

   <!-- End Navbar -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/arrive.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.minjs') }}"></script>
    <script src="{{ asset('js/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('js/bootstrap-selectpicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/buttons.js') }}"></script>
    <script src="{{ asset('js/chartist.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bootstrap-wizard.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.min.js') }}" defer></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script> --}}
</body>
</html>







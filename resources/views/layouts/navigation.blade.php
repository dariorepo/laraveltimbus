
 <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->

<!--
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->

                <!--
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard')}}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <!--
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <!--
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <!--
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <!--
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <!--
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <!--
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <!--
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

-->
















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
            <div class="input-group custom-input no-border">
                <input type="text" value="" class="form-control" placeholder="buscar" />
                <button type="submit" class="btn btn-danger btn-round btn-just-icon">
                    <i class="material-icons">Buscar</i>
                    <div class="ripple-container"></div>
                </button>
            </div>
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

       @if (Auth::user())
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
       @endif


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







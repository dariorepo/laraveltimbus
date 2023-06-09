<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <link rel="apple-touch-icon" sizes="76x76" href="#" />
    <link rel="icon" type="image/png" href="images/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="title" content="Ask online Form" />
    <meta name="description"
      content="Vanchi is a Material unique admin template built with tiles concept. It comes with Different dashboard layouts, fully responsive HTML pages and, colorful widgets." />
    <meta name="keywords"
      content="mobilewebdevelopment,HTML, CSS, JavaScript,Material,js,Forum ,webdesign ,website ,web ,webdesigner ,webdevelopment,Template,admin,dashboard,ebsitedesig,themeym,radwanweb,frontend-with-radwan" />
    <meta name="robots" content="index, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!--fonts de texto creo -->
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
            <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap1.css')}}">

        <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/materil.css')}}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

        <!-- Scripts -->
        <script src="{{ asset('js_old/js/bootstrap.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/arrive.min.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap-datetimepicker.minjs') }}" defer></script>
        <script src="{{ asset('js/bootstrap-material-design.min.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap-notify.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap-selectpicker.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap-tagsinput.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/buttons.js') }}" defer></script>
        <script src="{{ asset('js/chartist.min.js') }}" defer></script>
        <script src="{{ asset('js/core.js') }}" defer></script>
        <script src="{{ asset('js/fullcalendar.min.js') }}" defer></script>
        <script src="{{ asset('js/jasny-bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.bootstrap-wizard.js') }}" defer></script>
        <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
        <script src="{{ asset('js/material-dashboard.min.js') }}" defer></script>
        <script src="{{ asset('js/moment.min.js') }}" defer></script>
        <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}" defer></script>
        <script src="{{ asset('js/popper.min.js') }}" defer></script>
        <script src="{{ asset('js/sweetalert2.js') }}" defer></script>

        <!--   Core JS Files   -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-material-design.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.1/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="js/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="js/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="js/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="js/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"
      integrity="sha512-2JBCbWoMJPH+Uj7Wq5OLub8E5edWHlTM4ar/YJkZh3plwB2INhhOC3eDoqHm1Za/ZOSksrLlURLoyXVdfQXqwg=="
      crossorigin="anonymous"
    ></script>
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

    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')



            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

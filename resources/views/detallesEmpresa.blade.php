<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#" />
    <link rel="icon" type="image/png" href="/images/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="title" content="Ask online Form" />
    <meta name="description"
        content="Vanchi is a Material unique admin template built with tiles concept. It comes with Different dashboard layouts, fully responsive HTML pages and, colorful widgets." />
    <meta name="keywords"
        content="mobilewebdevelopment,HTML, CSS, JavaScript,Material,js,Forum ,webdesign ,website ,web ,webdesigner ,webdevelopment,Template,admin,dashboard,ebsitedesig,themeym,radwanweb,frontend-with-radwan" />
    <meta name="robots" content="index, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <title>timbus</title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="../css/fontawesome-all.min.css" />
    <link href="/css/materil.css" rel="stylesheet" />
    <link href="/css/custom.css" rel="stylesheet" />
    <link href="/css/responsive.css" rel="stylesheet" />
    <link href="/css/stylesUs.css" rel="stylesheet" />
    <link href="/css/bootstrap1.css" rel="stylesheet" />
</head>



<body class="">
        <article class="principal d-flex justify-content-center"><br>


            <div class="row justify-content-center ">

                @foreach ($rutas as $empresita)

                      <div class="col-6">
                        <a href="https://www.google.com/maps/@4.645345,-74.3390061,5z">
                        <img  src="{{asset('img/'.$empresita->imagen)}}" alt="" width="700" height="500">
                        </a>
                          {{-- <img src="{{$empresa->imagen}}" alt="" width="300" height="300"> --}}
                          <h4><em class="text-success"><strong>Ruta:</strong></em> {{$empresita->id}}</h4>
                          <img  src="{{asset('img/'.$empresita->imagenT)}}" alt="" width="200" height="100">
                          <h4><em class="text-success"><strong>Correo Empresa:</strong></em> {{$empresita->correo}}</h4>
                          <h4><em class="text-success"><strong>Nombre Ruta:</strong></em> {{$empresita->nombre}}</h4>
                          <p> <strong class="text-success">Descripcion: </strong>{{($empresita->descripcion)}}</p>
                          <p> <strong class="text-success">Precio: </strong>{{($empresita->precio)}}</p>
                          <p> <strong class="text-success">Horario: </strong>{{($empresita->horario)}}</p>

                          {{-- <p>{{str_limit(strtolower($empresa->telefono),50) }}</p> --}}

                          {{-- <p> <strong>Ruta_id:</strong>{{$empresita->id_ruta}}</p> --}}


                          {{-- <a href="{{route('')}}"
                          class="btn btn-warning btn-lg btn-block" role="button" arial-pressed="true">
                              Vincular
                          </a> --}}


                          {{-- <a href="{{route('detallesEmpresa', $empresa->id)}}"
                          class="btn btn-secondary btn-lg btn-block" role="button" arial-pressed="true">
                              Datalles
                          </a> --}}

                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d1409.3363400224482!2d-76.60461493497779!3d2.4385920298831367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e0!4m3!3m2!1d2.4788505!2d-76.5611219!4m3!3m2!1d2.4390411!2d-76.60437979999999!5e0!3m2!1ses!2sco!4v1644459751959!5m2!1ses!2sco" width="700" height="1000" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                      </div>
                @endforeach





              </div>
        </article>

        <script>
            console.log('Hi!');
        </script>

</body>

</html>

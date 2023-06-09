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



<body>
        <article class="principal d-flex justify-content-center"><br>

            <form class="form_reg" action="{{route('vehiculo.update', $vehiculo)}} " method="POST">
             

                <h3> Editar los Datos del Vehiculo {{$vehiculo->placa}}</h3>

                @csrf
                @method('PUT')

                <div class="row g-3 align-items-center">
                <label >Marca<br>
                <input type="text" name="marca" placeholder="marca" value="{{$vehiculo->marca}}">
                </label>
                </div>
                <br>

                <label>Placa</label><br>
                <input type="text" name="placa" placeholder="placa" value="{{$vehiculo->placa}}">
                <br>

                <label>Modelo</label><br>
                <input type="text" name="modelo" placeholder="modelo" value="{{$vehiculo->modelo}}">
                <br>

                <label>Soat</label><br>
                <input type="text" name="soat" placeholder="saot" value="{{$vehiculo->soat}}">
                <br>

                <label>Cilindraje</label><br>
                <input type="text" name="cilindraje" placeholder="cilindraje" value="{{$vehiculo->cilindraje}}">
                <br>

                <button class="btn btn-warning" type="submit">Guardar</button>

                <button href="{{route('Vehiculos')}}" class="btn btn-danger" type="submit">Volver</button>

            </form>
        </article>


</body>

</html>

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

            <form class="form_reg" action=" {{route('institucion.update', $institucion)}}" method="POST">
                <h3> Editar los Datos de la institucion {{$institucion->nombre}}</h3>

                @csrf
                @method('PUT')

                <div class="row g-3 align-items-center">
                <label >id<br>
                <input type="number" name="id" placeholder="nombre" value="{{$institucion->id}}">
                </label>
                </div>
                <br>

                <label>nit</label><br>
                <input type="text" name="nit" placeholder="nit" value="{{$institucion->nit}}">
                <br>

                <label>nombre</label><br>
                <input type="text" name="nombre" placeholder="nombre" value="{{$institucion->nombre}}">
                <br>

                <label>telefono</label><br>
                <input type="text" name="telefono" placeholder="telefono" value="{{$institucion->telefono}}">
                <br>

                <label>direccion</label><br>
                <input type="text" name="direccion" placeholder="direccion" value="{{$institucion->direccion}}">
                <br>

                <label>correo</label><br>
                <input type="email" name="correo" placeholder="correo" value="{{$institucion->correo}}">
                <br>

                <label>password</label><br>
                <input type="password" name="password" placeholder="password" value="{{$institucion->password}}">
                <br>

                <button class="btn btn-warning" type="submit">Guardar</button>

                <button href="{{ route('instituciones') }}" class="btn btn-danger" type="submit">Volver</button>

            </form>
        </article>


</body>

</html>

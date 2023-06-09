<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#" />
    <link rel="icon" type="image/png" href="../images/logo.png" />
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
    <link rel="stylesheet" href="../css/fontawesome-all.min.css"/>
    <link href="../css/materil.css" rel="stylesheet"/>
    <link href="../css/custom.css" rel="stylesheet"/>
    <link href="../css/responsive.css" rel="stylesheet"/>
    <link href="../css/stylesUs.css" rel="stylesheet"/>
    <link href="../css/bootstrap1.css" rel="stylesheet"/>
</head>
<body>

      <!-- este es el formulario original-->

 <article class="principal d-flex justify-content-center">

    <form class="form_reg" action="{{Route('crearRutaFile')}}" method="POST" enctype="multipart/form-data">
        {{--  --}}

        <h2>Crear Una Nueva Ruta</h2>

        @csrf


        <label>
            nombre: <br>
            <input type="text" name="nombre">

        </label>
        <br>

        <label>
            descripcion: <br>
             <textarea name="descripcion"  rows="8"></textarea>
        </label>
        <br>

        <label>
            precio: <br>
            <input type="text" name="precio">
        </label>
        <br>

        <label>
            horario: <br>
            <input type="text"  name="horario">
        </label>
        <br>

        <label>
            Imagen: <br>
            <input type="file"  name="file" accept="image/*"><br>
            @error('file')
                <small class="text-danger">
                    {{$message}}
                </small>
            @enderror

        </label>
        <br>



        <button type="submit" class="btn btn-success">Crear Ruta</button><br>

        {{-- <button href="" class="btn btn-danger" type="submit">Volver</button> --}}

        {{-- {{route('institucionesVinculadas')}} --}}




    </form>


</body>
</html>





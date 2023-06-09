<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruta prueba 3</title>
</head>
<body>

    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card utility-page-content custom-user-info-card">
                <div class="card-body custom-user-table-data">
                  <div class="table-responsive">
                    <table class="table">

                      <!-- codigo de prueba -->
                      <div class="row">
                          @foreach ($empresa as $empresab)
                                <div class="col-6">
                                    {{-- <img src="{{$empresab->nit}}" alt="" width="300" height="300"> --}}
                                    <h4>nombre{{$empresab->nombre}}</h4>
                                    {{-- <p>{{str_limit(strtolower($empresa->telefono),50) }}</p> --}}
                                    <p> <strong>telefono</strong>{{ $empresab->telefono}}</p>
                                    <p> <strong>direccion</strong>{{ $empresab->direccion}}</p>
                                    <p> <strong>correo</strong>{{ $empresab->correo}}</p>


                                </div>
                          {{-- @endforeach --}}
                        </div>
                    </table>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>


<x-app-layout>
    <div class="wrapper">
        <div
          class="sidebar"
          data-color="orange"
          data-background-color="white"
          data-image=""
        ><br><p></p>
          <div class="logo" id="text-center">
             <a href="../" class="simple-text logo-normal">
              <img src="images/yonier.jpg" alt="usuario" class="img-fluid d-blok mx-auto"/>
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
                <a class="nav-link" href="{{ route('pagoTransporte') }}">
                  <img class="mr-2" src="../bootstrap-icons/cash-coin.svg" />
                  Pago Transporte
                </a>
              </li>

              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('buscarRuta') }}">
                  <img class="mr-2" src="../bootstrap-icons/search.svg" />
                  Buscar Ruta
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

          <div class="content">
            <div class="container-fluid">
              <div class="row">

                <article class="d-flex">

                  {{-- <div class="card p-3 mb-2 bg-warning text-dark" style="width: 18rem;">
                    <img src="../images/conductor.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card Conductor</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div><br>


                  <div class="card p-3 mb-2 bg-info text-dark" style=" width: 18rem;">
                    <img src="../images/institucion.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card Institucion</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>

                    </div>
                  </div><br>



                  <div class="card p-3 mb-2 bg-secondary text-dark" style="width: 18rem;">
                    <img src="../images/empresa.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card Empresa</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div><br>


                  <div class="card p-3 mb-2 bg-warning text-dark" style="width: 18rem;">
                    <img src="../images/escolar4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card Estudiantes</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div><br> --}}


                <div class="row">

                  @foreach ($empresas as $empresa)

                        <div class="col-6">
                            {{-- <img src="{{asset('img/'.$empresa->imagen)}}" alt="" width="300" height="300"> --}}
                            <img src="{{asset('img/'.$empresa->imagenT)}}" alt="" width="300" height="300">

                            <h4 class="text-success"><em><strong>Nombre Empresa</strong></em></h4>
                            <h4>{{$empresa->nombre}}</h4>
                            <p> <strong class="text-success">Telefono: </strong>{{($empresa->telefono)}}</p>
                            <p> <strong class="text-success">Direccion: </strong>{{($empresa->direccion)}}</p>
                            <p> <strong class="text-success">Gmail: </strong>{{($empresa->correo)}}</p>
                            <p> <em class="text-success">Ruta: </em>{{$empresa->id_ruta}}</p>


                            {{-- <p>{{str_limit(strtolower($empresa->telefono),50) }}</p> --}}

                        <form  action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            {{-- {{ csrf_field() }} --}}
                            <input type="hidden" value="{{$empresa->id}}" id="id" name="id">
                            <input type="hidden" value="{{$empresa->nit}}" id="nit" name="nit">
                            <input type="hidden" value="{{$empresa->precio}}" id="precio" name="precio">
                            <input type="hidden" value="{{$empresa->horario}}" id="horario" name="horario">



                            <input type="hidden" value="{{($empresa->nombre)}}" id="nombre" name="nombre">
                            <input type="hidden" value="{{($empresa->direccion)}}" id="direccion" name="direccion">
                            <input type="hidden" value="{{($empresa->telefono)}}" id="telefono" name="telefono">
                            <input type="hidden" value="{{($empresa->correo)}}" id="correo" name="correo">
                            <input type="hidden" value="{{($empresa->id_ruta)}}" id="id_ruta" name="id_ruta">
                            <input type="hidden" value="{{($empresa->descripcion)}}" id="descripcion" name="descripcion">


                            <input type="hidden" value="{{$empresa->imagenT}}" id="imagenT" name="imagenT">
                            <input type="hidden" value="{{($empresa->imagen)}}" id="imagen" name="imagen">

                            {{-- <input type="hidden" value="{{ $empresa->slug }}" id="slug" name="slug"> --}}



                            <button class="btn btn-warning btn-lg btn-block " role="button" arial-pressed="true"  title="add to cart">
                                <i class="fa fa-shopping-cart"></i> Agregar
                            </button>

                        </form>

                            {{-- <p> <em class="text-dark">Nombre: </em>{{$empresa->nombre}}</p> --}}
                            {{-- <p> <em class="text-dark">Descripcion: </em>{{$empresa->descripcion}}</p> --}}


                            <!-- boton con ruta Inconporado-->
                            {{-- <a href="{{route('cart.store',$empresa)}}"
                            class="btn btn-warning btn-lg btn-block" role="button" arial-pressed="true">
                                Agregar Empresa
                            </a> --}}


                            <!-- boton oroginal del Video-->
                            {{-- <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                <i class="fa fa-shopping-cart"></i> add to cart
                            </button> --}}




                           {{-- <form action="{{route('addToEmpresa',$empresa)}}" class="d-inline" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-lg btn-block"  role="button" arial-pressed="true"> Agregar Empresa</button>

                            </form> --}}


                            <a href="{{route('detallesEmpresa',$empresa )}}"
                                {{--           --}}
                            class="btn btn-secondary btn-lg btn-block" role="button" arial-pressed="true">
                                Datalles
                            </a>

                        </div>


                  @endforeach
                  {{-- {{$empresas->links()}} --}}


                </div>





                </article>

              </div>
              <div class="row">


                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
</x-app-layout>

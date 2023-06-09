<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Models\User;
use App\Models\instituciones;
use App\Models\transportes;
use App\Models\conductores;
use App\Models\pago_estudiantes;
use App\Models\pago_instituciones;
use App\Models\vehiculos;
use App\Models\rutas;
use App\Models\registro_vehiculos;


class AdminController extends Controller
{

    public function index()
    {
        return view('administrador.index');
    }

    public function estudiantes()
    {
        $estudiantes = User::simplePaginate(30);
        return view('administrador.estudiantes', compact('estudiantes'));
    }




    public function instituciones()
    {
        $instituciones = instituciones::simplePaginate(30);
        return view('administrador.instituciones', compact('instituciones'));
    }

    public function edit_Institucion(instituciones $institucion)
    {
        return view('administrador.edit_institucion', compact('institucion'));
    }

    public function update_institucion(Request $request, instituciones $institucion)
    {
        $institucion->id = $request->id;
        $institucion->nit = $request->nit;
        $institucion->nombre = $request->nombre;
        $institucion->telefono = $request->telefono;
        $institucion->direccion = $request->direccion;
        $institucion->correo = $request->correo;
        $institucion->password = $request->password;
        $institucion->save();
        return redirect()->route('instituciones');
    }

    public function destroy_institucion(instituciones $institucion)
    {
        $institucion->delete();
        return redirect()->route('instituciones');
    }






    public function empresas()
    {
        $empresas = transportes::simplePaginate(30);
        return view('administrador.empresas', compact('empresas'));
    }


    public function edit_Empresa( $id)
    {
        /* return view('administrador.edit_empresa', compact('empresa')); */

         $empresa = transportes::find($id);
         return view('administrador.edit_empresa')->with('empresa',$empresa);
    }


    public function update_empresa(Request $request, transportes $empresa)
    {
        $empresa->id = $request->id;
        $empresa->nit = $request->nit;
        $empresa->nombre = $request->nombre;
        $empresa->telefono = $request->telefono;
        $empresa->direccion = $request->direccion;
        $empresa->correo = $request->correo;
        $empresa->password = $request->password;
        $empresa->save();
        return redirect()->route('empresas');
    }

    public function destroy_empresa( transportes $empresa)
    {
        $empresa->delete();
        session()->flash('message', 'Empresa eliminado correctamente!!');
        return redirect()->route('empresas');
    }

    public function crearEmpresa(rutas $rutas2)
    {
        $rutas2 = rutas::All();  //simplePaginate
        return view('administrador.crearEmpresa',compact('rutas2') );
    }



    public function crear_Empresa(Request $request)
    {
        $empresa = new transportes();
        // $empresa->id = $request->id;
        $empresa->nit = $request->nit;
        $empresa->nombre = $request->nombre;
        $empresa->telefono = $request->telefono;
        $empresa->direccion = $request->direccion;
        $empresa->correo = $request->correo;

        $imagenes = $request->file('file');
        $imagenes->move('img', $imagenes->getClientOriginalName());
        $empresa->imagenT = $imagenes->getClientOriginalName();

        $empresa->id_ruta = $request->id_ruta;
        $empresa->save();

        return redirect()->route('empresas');
    }





    public function  conductores()
    {
        $conductores= conductores::simplePaginate(60);
        return view('administrador.conductores', compact('conductores'));
    }

    public function edit_conductor(conductores $conductor)
    {
        return view('administrador.edit_conductor', compact('conductor'));
    }

    public function update_conductor(Request $request, conductores $conductor)
    {
        $conductor->id = $request->id;
        $conductor->cedula = $request->cedula;
        $conductor->nombre = $request->nombre;
        $conductor->apellido = $request->apellido;
        $conductor->telefono = $request->telefono;
        $conductor->direccion = $request->direccion;
        $conductor->correo = $request->correo;
        $conductor->password = $request->password;
        $conductor->save();
        return redirect()->route('conductores');
    }

    public function destroy_Conductor( conductores $conductor)
    {
        $conductor->delete();
        return redirect()->route('conductores');
    }






    public function  pagoEstudiantes()
    {
        $pagoEstudiantes = pago_estudiantes::simplePaginate(60);
        return view('administrador.pagoEstudiantes', compact('pagoEstudiantes'));
    }

    public function edit_PagoEstudiante(pago_estudiantes $pagoEstudiante)
    {
        return view('administrador.edit_pagoEstudiante', compact('pagoEstudiante'));
    }

    public function update_pagoEstudiante(Request $request, pago_estudiantes $update_pagoEstudiante)
    {
        $update_pagoEstudiante->id = $request->id;
        $update_pagoEstudiante->identificacion = $request->identificacion;
        $update_pagoEstudiante->nombre = $request->nombre;
        $update_pagoEstudiante->apellido = $request->apellido;
        $update_pagoEstudiante->telefono = $request->telefono;
        $update_pagoEstudiante->correo = $request->correo;
        $update_pagoEstudiante->institucion = $request->institucion;
        $update_pagoEstudiante->password = $request->password;
        $update_pagoEstudiante->save();
        return redirect()->route('pagoEstudiantes');
    }

    public function destroy_pagoEstudiante( pago_estudiantes $pagoEstudiante)
    {
        $pagoEstudiante->delete();
        return redirect()->route('pagoEstudiantes');
    }







    public function  pagoInstituciones()
    {
        $pagoInstituciones = pago_instituciones::simplePaginate(60);
        return view('administrador.pagoInstitu', compact('pagoInstituciones'));
    }

    public function edit_PagoInstitucion( pago_instituciones $pagoInstitucion)
    {
        return view('administrador.edit_pagoInstitucion', compact('pagoInstitucion'));
    }

    public function update_pagoInstitucion(Request $request, pago_instituciones $pagoInstitucion)
    {
        $pagoInstitucion->id = $request->id;
        $pagoInstitucion->nombre_institucion = $request->nombre_institucion;
        $pagoInstitucion->telefono = $request->telefono;
        $pagoInstitucion->correo = $request->correo;
        $pagoInstitucion->medio_pago = $request->medio_pago;
        $pagoInstitucion->monto = $request->monto;
        $pagoInstitucion->save();
        return redirect()->route('pagoInstituciones');
    }

    public function destroy_pagoInstitucion( pago_instituciones $pagoInstitucion)
    {
        $pagoInstitucion->delete();

        return redirect()->route('pagoInstituciones');
    }



    public function  vehiculos()
    {
        $vehiculos = registro_vehiculos::simplePaginate(60);
        return view('administrador.vehiculos', compact('vehiculos'));
    }


    public function edit_Vehiculo( registro_vehiculos $vehiculo)
    {
        return view('administrador.edit_registroVehiculo', compact('vehiculo'));
    }


    public function update_RegistroVehiculo(Request $request, registro_vehiculos $vehiculo)
    {
        $vehiculo->id = $request->id;
        $vehiculo->marca = $request->marca;
        $vehiculo->placa = $request->placa;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->soat = $request->soat;
        $vehiculo->cilindraje = $request->cilindraje;

        $vehiculo->save();
        return redirect()->route('vehiculos');
    }

    public function destroy_RegistroVehiculo( registro_vehiculos $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos');
    }







    public function  rutas()
    {
        $rutas = rutas::simplePaginate(60);
        return view('administrador.rutas', compact('rutas'));
    }


    public function edit_ruta( rutas $ruta)
    {
        return view('administrador.edit_ruta', compact('ruta'));
    }

    public function update_Ruta(Request $request, rutas $ruta)
    {
        $ruta->id = $request->id;
        $ruta->nombre= $request->nombre;
        $ruta->created_at = $request->created_at;
        $ruta->updated_at = $request->updated_at;

        $ruta->save();
        return redirect()->route('rutas');
    }

    public function destroy_Ruta( rutas $ruta)
    {
        $ruta->delete();

        return redirect()->route('rutas');
    }





    public function crearRuta()
    {
        return view('administrador.crearRuta');
    }



    public function crearRutaFile(Request $request)
    {
        $request->validate([
            'file'=> 'required|image|max:2048'
            // 'file'=> 'required|image|max:2048'

        ]);

        $ruta = new rutas();
        $ruta->nombre = $request->nombre;
        $ruta->descripcion = $request->descripcion;
        $ruta->precio = $request->precio;
        $ruta->horario = $request->horario;


        $imagenes = $request->file('file');
        $imagenes->move('img', $imagenes->getClientOriginalName());
        $ruta->imagen = $imagenes->getClientOriginalName();
        $ruta->save();

        return redirect()->route('rutas');


        // $url = Storage::url($imagenes);
        // rutas::create([
        //     'imagen' => $url
        // ]);
    }








    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        //
    }



    public function show(admin $admin)
    {
        //
    }


    public function edit(admin $admin)
    {
        //
    }



    public function update(Request $request, admin $admin)
    {
        //
    }


    public function destroy(admin $admin)
    {
        //
    }
}

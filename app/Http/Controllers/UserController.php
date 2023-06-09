<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\rutas;
use App\Models\transportes;


use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\instituciones;

class UserController extends Controller
{

    public function institucionEstudiante()
    {
        $instituciones = instituciones::simplePaginate(1);
        return view('estudiante.institucion', compact('instituciones'));
    }


    // public function buscarInstitucion()
    // {
    //     $instituciones = instituciones::simplePaginate(50);
    //     return view('estudiante.buscarInstitucion', compact('instituciones'));
    // }



    public function perfil()
    {
        // $estudiantes =  User::all();
         $estudiantes2 = \DB::table('users')
         ->select('id','name','apellido','telefono','email')
         ->where('apellido', '=', 'Trompeta')
         ->get()
         ->first();
        // return view('estudiante.perfilEstudiante', compact('estudiantes'));
        //    $estudiante = User::first() //'users'
        //    ->select('id','email', 'name')
        //    ->where('name', '=', 'yonier') //
        //    ->orderBy('id','DESC')
        //    ->get();
        //    return $estudiantes2;
        return view('estudiante.perfilEstudiante', compact('estudiantes2'));
        //    return $estudiante->toArray();
        //    return view('estudiante.perfilEstudiante', ['users' => $estudiante]);
        //   return view('estudiante.perfilEstudiante')->with('estudiante');
    }

    public function addToEmpresa(transportes $empresa)
    {
        $rutasY_ems = transportes::join("rutas","transportes.id_ruta", "=", "rutas.id")  //simplePaginate
       ->where("transportes.id",$empresa->id)
      //  "id_sitio",$site->id
     ->select(
     //   "transportes.id",

     "transportes.nit",
     "transportes.nombre","transportes.direccion",
     "transportes.telefono","transportes.correo",
     "transportes.id_ruta", "transportes.imagenT",


     "rutas.descripcion", "rutas.precio",
      "rutas.horario", "rutas.imagen",)
      //"rutas.id", "rutas.nombre",
      ->get();


        // Cart::add(array(
        //     'id' => $empresa->id ,
        //     'nombre' => $empresa->nombre,
        //     'direccion' => $empresa->direccion,
        //     'telefono' => $empresa->telefono,
        //     'attributes' => array(
        //         'cdescripcion' => $empresa->descripcion,
        //         'horario' => $empresa->horario,
        //     ),
        // ));

        // return back();

    //   return view('estudiante.rutaEstudiante', compact('rutasY_ems'));

        // return redirect()->route('dashboard');
    }


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }



    public function edit( User $estudiante)
    {
        return view('administrador.editEstudiantes', compact('estudiante'));
    }


    public function update(Request $request, User $estudiante)
    {
        $estudiante->id = $request->id;
        $estudiante->name = $request->name;
        $estudiante->email = $request->email;
        $estudiante->password = $request->password;
        $estudiante->save();

        return redirect()->route('estudiantes');

    }








    public function updatePerfil(Request $request, User $estudiantes2)
    {
        $estudiantes2->name = $request->name;
        $estudiantes2->apellido = $request->apellido;

        $estudiantes2->email = $request->email;
        $estudiantes2->telefono = $request->telefono;
        $estudiantes2->save();

        return redirect()->route('perfil');
    }











    public function destroy(User $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiantes');

    }
}

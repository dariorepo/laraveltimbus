<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\instituciones;


class InstitucionesController extends Controller
{

    public function index()
    {
        //
    }



    public function create()
    {
        return view('empresa.vincularInstitucion');
    }



    public function store(Request $request)
    {
        // return $request->all();
        $institucion = new instituciones();

        $institucion->nit = $request->nit;
        $institucion->nombre = $request->nombre;
        $institucion->telefono = $request->telefono;
        $institucion->direccion = $request->direccion;
        $institucion->correo = $request->correo;
        // $institucion->password = $request->password;
        $institucion->save();

        return redirect()->route('institucionesVinculadas');
    }



    public function show(instituciones $instituciones)
    {
        //
    }



    public function edit(instituciones $institucion)
    {

        return view('empresa.edit_instVinculadas', compact('institucion'));
    }


    public function update( Request $request, instituciones $institucion)
    {
        $institucion->nombre = $request->nombre;
        $institucion->telefono = $request->telefono;
        $institucion->direccion = $request->direccion;
        $institucion->correo = $request->correo;
        // $institucion->password = $request->password;

        $institucion->save();


        return redirect()->route('institucionesVinculadas');
    }



    public function destroy(instituciones $institucion)
    {
        $institucion->delete();
        return redirect()->route('institucionesVinculadas');


        // $institucion = instituciones::destroy($request->id);
        // return $institucion;
    }

    public function desvincularInst( instituciones $institucion)
    {
        $institucion->delete();
        return redirect()->route('institucionEstudiante');
    }


}

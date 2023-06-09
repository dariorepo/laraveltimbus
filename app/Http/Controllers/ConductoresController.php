<?php

namespace App\Http\Controllers;

use App\Models\conductores;
use Illuminate\Http\Request;

class ConductoresController extends Controller
{

    public function index()
    {
        //
    }


    public function conductoresEmpresa()
    {
        $conductores = conductores::simplePaginate(50);
        return view('empresa.conductores', compact('conductores'));
    }


    public function EditConductorEmpresa( conductores $conductor)
    {
        return view('empresa.edit_conductorEmpresa',compact('conductor'));
    }


    public function updateConductorEmpresa(Request $request, conductores $conductor)
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

        return redirect()->route('conductoresEmpresa');
    }


    public function conductorEmpresaDestroy(conductores $conductor)
    {
        $conductor->delete();
        return redirect()->route('conductoresEmpresa');

    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(conductores $conductores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\conductores  $conductores
     * @return \Illuminate\Http\Response
     */
    public function edit(conductores $conductores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\conductores  $conductores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conductores $conductores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\conductores  $conductores
     * @return \Illuminate\Http\Response
     */
    public function destroy(conductores $conductores)
    {
        //
    }
}

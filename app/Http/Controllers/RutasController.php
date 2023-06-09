<?php

namespace App\Http\Controllers;


use App\Models\rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{

    public function index()
    {
        //
    }

    public function buscarRuta() //buscar ruta estudiante
    {
        $rutas = rutas::simplePaginate(20);
        return view('estudiante.buscarRuta', compact('rutas'));
    }


    public function rutasEmpresa()
    {
        $rutas = rutas::simplePaginate(20);
        return view('empresa.ruta_empresa', compact('rutas'));
    }


    public function crearRuta()
    {
        return view('empresa.crearRuta');
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $ruta = new rutas();
        $ruta->nombre = $request->nombre;
        $ruta->save();

        return redirect()->route('rutaEmpresa');
    }



    public function show(rutas $rutas)
    {
        //
    }



    public function edit(rutas $rutas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rutas $rutas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function destroy(rutas $rutas)
    {
        //
    }
}

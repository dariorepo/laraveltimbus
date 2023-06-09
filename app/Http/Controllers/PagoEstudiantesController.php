<?php

namespace App\Http\Controllers;

use App\Models\pago_estudiantes;
use Illuminate\Http\Request;

class PagoEstudiantesController extends Controller
{

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
        $pago_estu_transp = new pago_estudiantes();

        $pago_estu_transp->identificacion = $request->identificacion;
        $pago_estu_transp->apellido = $request->apellido;
        $pago_estu_transp->telefono = $request->telefono;
        $pago_estu_transp->correo = $request->correo;

        $pago_estu_transp->save();

        return redirect()->route('pagoTransporte');

    }




    public function show(pago_estudiantes $pago_estudiantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pago_estudiantes  $pago_estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(pago_estudiantes $pago_estudiantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pago_estudiantes  $pago_estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pago_estudiantes $pago_estudiantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pago_estudiantes  $pago_estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(pago_estudiantes $pago_estudiantes)
    {
        //
    }
}

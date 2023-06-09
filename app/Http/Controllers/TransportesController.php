<?php

namespace App\Http\Controllers;

use App\Models\rutas;
use App\Models\transportes;
use Illuminate\Http\Request;
use App\Models\instituciones;



class TransportesController extends Controller
{
    public function institucionesVinculadas()
    {
        $instituciones = instituciones::simplePaginate(20);
        return view('empresa.inst_vinculadas', compact('instituciones'));
    }


    public function edit_instVinculadas(transportes $institucion)
    {
        return view('empresa.edit_instVinculadas', compact('institucion'));
    }


    public function empresa_details(transportes $empresa) // transportes
    {
        //findOrFail($empresa)
        // $detalleEmpresa = transportes::find($empresa);
        // return $empresa;

     $rutas = transportes::join("rutas","transportes.id_ruta", "=", "rutas.id")  //simplePaginate
       ->where("transportes.id",$empresa->id)
      //  "id_sitio",$site->id
     ->select(
     //   "transportes.id","transportes.nit","transportes.nombre",
     //   "transportes.telefono","transportes.direccion",
     //   "transportes.id_ruta",
     "transportes.correo","transportes.imagenT",

     "rutas.id","rutas.nombre","rutas.descripcion", "rutas.precio",
      "rutas.horario", "rutas.imagen",)

      //"rutas.id", "rutas.nombre",
      ->get();
    //   ->first();

        return view('detallesEmpresa', compact('rutas'));
    }



    public function update_insVinculadas(Request $request,  instituciones $institucion)
    {
        //
    }


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transportes  $transportes
     * @return \Illuminate\Http\Response
     */
    public function show(transportes $transportes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transportes  $transportes
     * @return \Illuminate\Http\Response
     */
    public function edit(transportes $transportes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transportes  $transportes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transportes $transportes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transportes  $transportes
     * @return \Illuminate\Http\Response
     */
    public function destroy(instituciones $institucion)
    {

    }
}

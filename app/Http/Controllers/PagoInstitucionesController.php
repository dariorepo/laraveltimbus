<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\pago_instituciones;

class PagoInstitucionesController extends Controller
{

    public function index()
    {
        //
    }

    public function pagoInstituciones()
    {
        $pagoInstituciones = pago_instituciones::paginate(20);
        return view('empresa.pago_instituciones', compact('pagoInstituciones'));
    }





    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        //
    }



    public function show(pago_instituciones $pago_instituciones)
    {
        //
    }




    public function edit(pago_instituciones $pago_instituciones)
    {
        //
    }



    public function update(Request $request, pago_instituciones $pago_instituciones)
    {
        //
    }



    public function destroy(pago_instituciones $pagoInstitucion)
    {
        $pagoInstitucion->delete();
        return redirect()->route('pagoInstitucionesE');
    }



}

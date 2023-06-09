<?php

namespace App\Http\Controllers;

use App\Models\registro_vehiculos;
use Illuminate\Http\Request;

class RegistroVehiculosController extends Controller
{

    public function index()
    {
        //
    }

    public function vehiculos()
    {
        $vehiculos = registro_vehiculos::simplePaginate(50);

        return view('empresa.vehiculos', compact('vehiculos'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $registroVehiculo = new registro_vehiculos();
        $registroVehiculo->marca = $request->marca;
        $registroVehiculo->placa = $request->placa;
        $registroVehiculo->modelo = $request->modelo;
        $registroVehiculo->soat = $request->soat;
        $registroVehiculo->cilindraje = $request->cilindraje;

        $registroVehiculo->save();

        return redirect()-> Route('Vehiculos');
    }


    public function show(registro_vehiculos $registro_vehiculos)
    {
        //
    }

    public function edit(registro_vehiculos $vehiculo)
    {
        return view('empresa.editarVehiculo', compact('vehiculo'));
    }


    public function update(Request $request, registro_vehiculos $vehiculo)
    {
        $vehiculo->marca = $request->marca;
        $vehiculo->placa = $request->placa;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->soat = $request->soat;
        $vehiculo->cilindraje = $request->cilindraje;
 
        $vehiculo->save();

        return redirect()->route('Vehiculos');
    }


    public function destroy(registro_vehiculos $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('Vehiculos');
    }
}

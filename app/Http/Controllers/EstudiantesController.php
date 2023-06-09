<?php

namespace App\Http\Controllers;

use App\Models\estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{

    public function perfil()
    {
        return view('estudiante.perfilEstudiante');
    }


    public function index()
    {
        //
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
       //
    }


    public function show(estudiantes $estudiantes)
    {

    }


    public function edit(estudiantes $estudiantes)
    {
        return view('estudiante.');
    }


    public function update(Request $request, estudiantes $estudiantes)
    {
        //
    }


    public function destroy(estudiantes $estudiantes)
    {
        //
    }
}

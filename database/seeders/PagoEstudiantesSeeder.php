<?php

namespace Database\Seeders;
use App\Models\pago_estudiantes;

use Illuminate\Database\Seeder;

class PagoEstudiantesSeeder extends Seeder
{

    public function run()
    {
        $PagoEstudiantes = new pago_estudiantes();
        $PagoEstudiantes->identificacion = '1092367864';
        $PagoEstudiantes->nombre = 'gladis';
        $PagoEstudiantes->apellido = 'chavarro';
        $PagoEstudiantes->telefono = '3219147546';
        $PagoEstudiantes->correo = 'chavarro@gmail.com';
        $PagoEstudiantes->institucion = 'INEM FRNCISCO JOSE DE CALDAS';
        $PagoEstudiantes->password = '1234';
        // $PagoEstudiantes->id_institucion = '1';
        // $PagoEstudiantes->id_estudiante = '1';
        $PagoEstudiantes->save();


        $PagoEstudiantes1 = new pago_estudiantes();
        $PagoEstudiantes1->identificacion = '1232123212';
        $PagoEstudiantes1->nombre = 'julian andres';
        $PagoEstudiantes1->apellido = 'yandum';
        $PagoEstudiantes1->telefono = '3214567834';
        $PagoEstudiantes1->correo = 'yandum@gmail.com';
        $PagoEstudiantes1->institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAMANGA';
        $PagoEstudiantes1->password = '1234';
        // $PagoEstudiantes1->id_institucion = '2';
        // $PagoEstudiantes1->id_estudiante = '2';
        $PagoEstudiantes1->save();


        $PagoEstudiantes2 = new pago_estudiantes();
        $PagoEstudiantes2->identificacion = '10298232126';
        $PagoEstudiantes2->nombre = 'fabio';
        $PagoEstudiantes2->apellido = 'pizo';
        $PagoEstudiantes2->telefono = '2362721232';
        $PagoEstudiantes2->correo = 'pizo@gmail.com';
        $PagoEstudiantes2->institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN ANTONIO';
        $PagoEstudiantes2->password = '1234';
        // $PagoEstudiantes2->id_institucion = '3';
        // $PagoEstudiantes2->id_estudiante = '3';
        $PagoEstudiantes2->save();


        $PagoEstudiantes3 = new pago_estudiantes();
        $PagoEstudiantes3->identificacion = '10281232174';
        $PagoEstudiantes3->nombre = 'dania ';
        $PagoEstudiantes3->apellido = 'cruz';
        $PagoEstudiantes3->telefono = '1029123452';
        $PagoEstudiantes3->correo = 'cruz@gmail.com';
        $PagoEstudiantes3->institucion = '2982834321';
        $PagoEstudiantes3->password = '1234';
        // $PagoEstudiantes3->id_institucion = '4';
        // $PagoEstudiantes3->id_estudiante = '4';
        $PagoEstudiantes3->save();


        $PagoEstudiantes4 = new pago_estudiantes();
        $PagoEstudiantes4->identificacion = '4534321232';
        $PagoEstudiantes4->nombre = 'wilian';
        $PagoEstudiantes4->apellido = 'macias';
        $PagoEstudiantes4->telefono = '2387272342';
        $PagoEstudiantes4->correo = 'macias@gmail.com';
        $PagoEstudiantes4->institucion = 'ESCUELA SEDE SAN BERNARDINO';
        $PagoEstudiantes4->password = '1234';
        // $PagoEstudiantes4->id_institucion = '5';
        // $PagoEstudiantes4->id_estudiante = '5';
        $PagoEstudiantes4->save();


        $PagoEstudiantes5 = new pago_estudiantes();
        $PagoEstudiantes5->identificacion = '1256438976';
        $PagoEstudiantes5->nombre = 'amanda';
        $PagoEstudiantes5->apellido = 'zambrano';
        $PagoEstudiantes5->telefono = '1232165439';
        $PagoEstudiantes5->correo = 'zambrano@gmil.com';
        $PagoEstudiantes5->institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN CAMILO';
        $PagoEstudiantes5->password = '1234';
        // $PagoEstudiantes5->id_institucion = '6';
        // $PagoEstudiantes5->id_estudiante = '6';
        $PagoEstudiantes5->save();


        $PagoEstudiantes6 = new pago_estudiantes();
        $PagoEstudiantes6->identificacion = '2981202812';
        $PagoEstudiantes6->nombre = 'german';
        $PagoEstudiantes6->apellido = 'alfonzo';
        $PagoEstudiantes6->telefono = '1072123423';
        $PagoEstudiantes6->correo = 'alfonzo@gmail.com';
        $PagoEstudiantes6->institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN GABRIEL ARCANGEL';
        $PagoEstudiantes6->password = '1234';
        // $PagoEstudiantes6->id_institucion = '7';
        // $PagoEstudiantes6->id_estudiante = '7';
        $PagoEstudiantes6->save();


        $PagoEstudiantes7 = new pago_estudiantes();
        $PagoEstudiantes7->identificacion = '1092321345';
        $PagoEstudiantes7->nombre = 'brayan';
        $PagoEstudiantes7->apellido = 'gonzales';
        $PagoEstudiantes7->telefono = '1028343245';
        $PagoEstudiantes7->correo = 'gonzales@gmail.com';
        $PagoEstudiantes7->institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN IGNACIO';
        $PagoEstudiantes7->password = '1234';
        // $PagoEstudiantes7->id_institucion = '8';
        // $PagoEstudiantes7->id_estudiante = '8';
        $PagoEstudiantes7->save();

    }
}

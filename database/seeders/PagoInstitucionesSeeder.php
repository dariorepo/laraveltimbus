<?php
namespace Database\Seeders;

use App\Models\pago_instituciones;
use Illuminate\Database\Seeder;

class PagoInstitucionesSeeder extends Seeder
{

    public function run()
    {
        $pagoInstituciones = new pago_instituciones();
        $pagoInstituciones->nombre_institucion = 'INEM FRNCISCO JOSE DE CALDAS';
        $pagoInstituciones->telefono = '3214567893';
        $pagoInstituciones->correo = 'inem@gmail.com';
        $pagoInstituciones->medio_pago = 'tarjeta';
        $pagoInstituciones->monto = '65000';
        $pagoInstituciones->save();
        // $pagoInstituciones->id_transporte = '';


        $pagoInstituciones1 = new pago_instituciones();
        $pagoInstituciones1->nombre_institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAMANGA';
        $pagoInstituciones1->telefono = '3214567893';
        $pagoInstituciones1->correo = 'instsamanga@gmail.com';
        $pagoInstituciones1->medio_pago = 'tarjeta';
        $pagoInstituciones1->monto = '78000';

        $pagoInstituciones1->save();


        $pagoInstituciones2 = new pago_instituciones();
        $pagoInstituciones2->nombre_institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN AGUSTIN';
        $pagoInstituciones2->telefono = '321567458';
        $pagoInstituciones2->correo = 'sanagustin@gmail.com';
        $pagoInstituciones2->medio_pago = 'tarjeta';
        $pagoInstituciones2->monto = '56000';

        $pagoInstituciones2->save();


        $pagoInstituciones3 = new pago_instituciones();
        $pagoInstituciones3->nombre_institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN ANTONIO';
        $pagoInstituciones3->telefono = '8238246';
        $pagoInstituciones3->correo = 'sanantonio@gmail.com';
        $pagoInstituciones3->medio_pago = 'tarjeta';
        $pagoInstituciones3->monto = '150000';

        $pagoInstituciones3->save();


        $pagoInstituciones4 = new pago_instituciones();
        $pagoInstituciones4->nombre_institucion = 'ESCUELA SEDE SAN BERNARDINO';
        $pagoInstituciones4->telefono = '3423098';
        $pagoInstituciones4->correo = 'sanbernan@gmail.com';
        $pagoInstituciones4->medio_pago = 'tarjeta';
        $pagoInstituciones4->monto = '27000';

        $pagoInstituciones4->save();


        $pagoInstituciones5 = new pago_instituciones();
        $pagoInstituciones5->nombre_institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN CAMILO';
        $pagoInstituciones5->telefono = '1098271';
        $pagoInstituciones5->correo = 'sedecamilo@gmail.com';
        $pagoInstituciones5->medio_pago = 'tarjeta';
        $pagoInstituciones5->monto = '34000';

        $pagoInstituciones5->save();


        $pagoInstituciones6 = new pago_instituciones();
        $pagoInstituciones6->nombre_institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN GABRIEL ARCANGEL';
        $pagoInstituciones6->telefono = '2341202';
        $pagoInstituciones6->correo = 'sangabriel@gmail.com';
        $pagoInstituciones6->medio_pago = 'tarjeta';
        $pagoInstituciones6->monto = '48000';

        $pagoInstituciones6->save();


        $pagoInstituciones7 = new pago_instituciones();
        $pagoInstituciones7->nombre_institucion = 'INSTITUCIÓN EDUCATIVA SEDE SAN IGNACIO';
        $pagoInstituciones7->telefono = '9886784';
        $pagoInstituciones7->correo = 'sanignacion@gmail.com';
        $pagoInstituciones7->medio_pago = 'tarjeta';
        $pagoInstituciones7->monto = '50000';

        $pagoInstituciones7->save();

    }
}

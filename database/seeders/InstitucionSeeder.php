<?php

namespace Database\Seeders;

use App\Models\instituciones;
use Illuminate\Database\Seeder;

class InstitucionSeeder extends Seeder
{

    public function run()
    {
        $institucion = new instituciones();
        $institucion->nit = '1267';
        $institucion->nombre = 'INEM FRNCISCO JOSE DE CALDAS';
        $institucion->telefono = '3214567893';
        $institucion->direccion = 'No 3N, Cra. 9 #212, Popayán, Cauca';
        $institucion->correo = 'inem@gmail.com';
        $institucion->password = '13123';
        $institucion->save();

        $institucion = new instituciones();
        $institucion->nit = '1267';
        $institucion->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAMANGA';
        $institucion->telefono = '3214567893';
        $institucion->direccion = 'VDA SAMANGA,  POPAYAN CAUCA';
        $institucion->correo = 'instsamanga@gmail.com';
        $institucion->password = '13123';
        $institucion->save();


        $institucion2 = new instituciones();
        $institucion2->nit = '2341';
        $institucion2->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAN AGUSTIN';
        $institucion2->telefono = '3215674587';
        $institucion2->direccion = 'CRA 7 # 7-33,  POPAYAN CAUCA.';
        $institucion2->correo = 'sanagustin@gmail.com';
        $institucion2->password = '3542';
        $institucion2->save();

        $institucion3 = new instituciones();
        $institucion3->nit = '6754';
        $institucion3->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAN ANTONIO';
        $institucion3->telefono = '8238246';
        $institucion3->direccion = 'VDA SAN ANTONIO,  POPAYAN CAUCA.';
        $institucion3->correo = 'sanantonio@gmail.com';
        $institucion3->password = '8765';
        $institucion3->save();

        $institucion4 = new instituciones();
        $institucion4->nit = '6754';
        $institucion4->nombre = 'ESCUELA SEDE SAN BERNARDINO';
        $institucion4->telefono = '3423098';
        $institucion4->direccion = 'CORREGIMIENTO SAN BERNARDINO,  POPAYAN CAUCA';
        $institucion4->correo = 'sanbernan@gmail.com';
        $institucion4->password = '3452462';
        $institucion4->save();

        $institucion5 = new instituciones();
        $institucion5->nit = '3218';
        $institucion5->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAN CAMILO';
        $institucion5->telefono = '1098271';
        $institucion5->direccion = 'CL 10 # 9 - 82 LAS AMERICAS,  POPAYAN CAUCA.';
        $institucion5->correo = 'sedecamilo@gmail.com';
        $institucion5->password = '2312';
        $institucion5->save();

        $institucion6 = new instituciones();
        $institucion6->nit = '3241';
        $institucion6->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAN GABRIEL ARCANGEL';
        $institucion6->telefono = '2341202';
        $institucion6->direccion = 'PUELENJE CENTRO,  POPAYAN CAUCA.';
        $institucion6->correo = 'sangabriel@gmail.com';
        $institucion6->password = '2389';
        $institucion6->save();

        $institucion7 = new instituciones();
        $institucion7->nit = '2321';
        $institucion7->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAN IGNACIO';
        $institucion7->telefono = '9886784';
        $institucion7->direccion = 'VDA SAN IGNACIO,  POPAYAN CAUCA.';
        $institucion7->correo = 'sanignacion@gmail.com';
        $institucion7->password = '322983';
        $institucion7->save();

        $institucion8 = new instituciones();
        $institucion8->nit = '3213';
        $institucion8->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAN ISIDRO';
        $institucion8->telefono = '5463421';
        $institucion8->direccion = 'VDA SAN ISIDRO,  POPAYAN CAUCA.';
        $institucion8->correo = 'isidro@gmail.com';
        $institucion8->password = '3249';
        $institucion8->save();

        $institucion9 = new instituciones();
        $institucion9->nit = '3454';
        $institucion9->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAN JOSE';
        $institucion9->telefono = '3429878';
        $institucion9->direccion = 'CR 32 NO. 5-82 SAN JOSE,  POPAYAN CAUCA.';
        $institucion9->correo = 'sanjose@gmail.com';
        $institucion9->password = '3423';
        $institucion9->save();

        $institucion10 = new instituciones();
        $institucion10->nit = '7654';
        $institucion10->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SAN RAFAEL';
        $institucion10->telefono = '4328764';
        $institucion10->direccion = 'VDA SAN RAFAEL,  POPAYAN CAUCA.';
        $institucion10->correo = 'sanrafael@gmail.com';
        $institucion10->password = '3234';
        $institucion10->save();

        $institucion11 = new instituciones();
        $institucion11->nit = '2312';
        $institucion11->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SANTA BARBARA';
        $institucion11->telefono = '2321906';
        $institucion11->direccion = 'VDA SANTA BARBARA,  POPAYAN CAUCA.';
        $institucion11->correo = 'santabarbara@gmail.com';
        $institucion11->password = '2321';
        $institucion11->save();

        $institucion12 = new instituciones();
        $institucion12->nit = '3321';
        $institucion12->nombre = 'INSTITUCIÓN EDUCATIVA SEDE SANTA LUISA';
        $institucion12->telefono = '3237687';
        $institucion12->direccion = ' CR 1 NO 1-15 LAS FERIAS,  POPAYAN CAUCA.';
        $institucion12->correo = 'santaluisa@gmail.com';
        $institucion12->password = '2356';
        $institucion12->save();

        $institucion13 = new instituciones();
        $institucion13->nit = '6574';
        $institucion13->nombre = 'INSTITUCIÓN EDUCATIVA SEDE TOMAS CIPRIANO DE MOSQUERA';
        $institucion13->telefono = '4342123';
        $institucion13->direccion = 'CR 23 NO. 11 - 20 TOMAS CIPRIANO,  POPAYAN CAUCA.';
        $institucion13->correo = 'cipriano@gmail.com';
        $institucion13->password = '4453';
        $institucion13->save();



    }
}

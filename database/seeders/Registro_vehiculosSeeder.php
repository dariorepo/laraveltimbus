<?php

namespace Database\Seeders;

use App\Models\registro_vehiculos;
use Illuminate\Database\Seeder;

class Registro_vehiculosSeeder extends Seeder
{

    public function run()
    {
        $registro_vehiculos = new registro_vehiculos();
        $registro_vehiculos->marca = 'BMW';
        $registro_vehiculos->placa = 'ASE 234 BOGOTA D.C.';
        $registro_vehiculos->modelo = 'fiesta';
        $registro_vehiculos->soat = '12329349';
        $registro_vehiculos->cilindraje = '1500';
        $registro_vehiculos->save();

        $registro_vehiculos1 = new registro_vehiculos();
        $registro_vehiculos1->marca = 'Mercedes-Benz';
        $registro_vehiculos1->placa = 'ASR 232 CAUCA';
        $registro_vehiculos1->modelo = 'Mustang';
        $registro_vehiculos1->soat = '43286453';
        $registro_vehiculos1->cilindraje = '1500';
        $registro_vehiculos1->save();

        $registro_vehiculos2 = new registro_vehiculos();
        $registro_vehiculos2->marca = 'Audi';
        $registro_vehiculos2->placa = 'SDE 254 POPAYAN';
        $registro_vehiculos2->modelo = '500X';
        $registro_vehiculos2->soat = '34323321';
        $registro_vehiculos2->cilindraje = '2000';
        $registro_vehiculos2->save();

        $registro_vehiculos3 = new registro_vehiculos();
        $registro_vehiculos3->marca = 'Lexus';
        $registro_vehiculos3->placa = 'SDW 485 POPAYAN';
        $registro_vehiculos3->modelo = 'X6';
        $registro_vehiculos3->soat = '56567654';
        $registro_vehiculos3->cilindraje = '2500';
        $registro_vehiculos3->save();


        $registro_vehiculos4 = new registro_vehiculos();
        $registro_vehiculos4->marca = 'Renault';
        $registro_vehiculos4->placa = 'DHT 434 CAUCA';
        $registro_vehiculos4->modelo = 'X1';
        $registro_vehiculos4->soat = '87564563';
        $registro_vehiculos4->cilindraje = '3000';
        $registro_vehiculos4->save();


        $registro_vehiculos4 = new registro_vehiculos();
        $registro_vehiculos4->marca = 'Opel';
        $registro_vehiculos4->placa = 'PFH 232 CAUCA';
        $registro_vehiculos4->modelo = 'ATS';
        $registro_vehiculos4->soat = '98567897';
        $registro_vehiculos4->cilindraje = '4000';
        $registro_vehiculos4->save();


        $registro_vehiculos5 = new registro_vehiculos();
        $registro_vehiculos5->marca = 'Seat';
        $registro_vehiculos5->placa = 'SDE 232 VALLE';
        $registro_vehiculos5->modelo = 'ATECA';
        $registro_vehiculos5->soat = '87564534';
        $registro_vehiculos5->cilindraje = '4300';
        $registro_vehiculos5->save();


        $registro_vehiculos6 = new registro_vehiculos();
        $registro_vehiculos6->marca = 'Abarth';
        $registro_vehiculos6->placa = 'ERD 453 VALLE';
        $registro_vehiculos6->modelo = 'IBIZA';
        $registro_vehiculos6->soat = '98564574';
        $registro_vehiculos6->cilindraje = '5400';
        $registro_vehiculos6->save();


        $registro_vehiculos7 = new registro_vehiculos();
        $registro_vehiculos7->marca = 'BMV';
        $registro_vehiculos7->placa = 'DES 342 VALLE';
        $registro_vehiculos7->modelo = '500L';
        $registro_vehiculos7->soat = '87546575';
        $registro_vehiculos7->cilindraje = '2500';
        $registro_vehiculos7->save();


        $registro_vehiculos8 = new registro_vehiculos();
        $registro_vehiculos8->marca = 'Acura';
        $registro_vehiculos8->placa = 'DFR 845 TAMBO';
        $registro_vehiculos8->modelo = '4 Crossback';
        $registro_vehiculos8->soat = '09586545';
        $registro_vehiculos8->cilindraje = '4300';
        $registro_vehiculos8->save();


        $registro_vehiculos9 = new registro_vehiculos();
        $registro_vehiculos9->marca = 'Audi';
        $registro_vehiculos9->placa = 'DFD 342 CALI';
        $registro_vehiculos9->modelo = 'F8 Tributo';
        $registro_vehiculos9->soat = '98565457';
        $registro_vehiculos9->cilindraje = '2500';
        $registro_vehiculos9->save();


        $registro_vehiculos10 = new registro_vehiculos();
        $registro_vehiculos10->marca = 'BAIC';
        $registro_vehiculos10->placa = 'RDE 232 VALLE';
        $registro_vehiculos10->modelo = '812 Superfast';
        $registro_vehiculos10->soat = '98769856';
        $registro_vehiculos10->cilindraje = '1500';
        $registro_vehiculos10->save();


        $registro_vehiculos11 = new registro_vehiculos();
        $registro_vehiculos11->marca = 'Bentley';
        $registro_vehiculos11->placa = 'JTR 674 CALI';
        $registro_vehiculos11->modelo = 'Dokker';
        $registro_vehiculos11->soat = '90985645';
        $registro_vehiculos11->cilindraje = '3000';
        $registro_vehiculos11->save();


        $registro_vehiculos12 = new registro_vehiculos();
        $registro_vehiculos12->marca = 'BMW';
        $registro_vehiculos12->placa = 'UHG 453 POPAYAN';
        $registro_vehiculos12->modelo = 'Duster';
        $registro_vehiculos12->soat = '09845436';
        $registro_vehiculos12->cilindraje = '4000';
        $registro_vehiculos12->save();
    }
}

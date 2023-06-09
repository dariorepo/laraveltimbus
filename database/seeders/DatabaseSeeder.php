<?php

namespace Database\Seeders;
// namespace Database\Factories;

use App\Models\conductores;
use App\Models\User;
use App\Models\rutas;



use Illuminate\Database\Seeder;
// use Illuminate\Database\Factories;



class DatabaseSeeder extends Seeder
{

    public function run()
    {
        //\App\Models\User::factory(10)->create();



        //Factorys
        conductores::factory(31)->create();
        User::factory(10)->create();
        // rutas::factory(2)->create();




        $this->call(InstitucionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PagoEstudiantesSeeder::class);
        $this->call(PagoInstitucionesSeeder::class);
        $this->call(Registro_vehiculosSeeder::class);
        $this->call(TransportesSeeder::class);
        $this->call(RutasSeeder::class);





    }
}

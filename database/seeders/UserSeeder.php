<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        $user = new User();
        $user->name = 'gladis chavarro';
        $user->email = 'gladis@gmail.com';
        $user->password = '1234';
        $user->save();

        $user1 = new User();
        $user1->name = 'julian andres yandum';
        $user1->email = 'julian@gmail.com';
        $user1->password = '1234';
        $user1->save();

        $user2 = new User();
        $user2->name = 'fabio pizo';
        $user2->email = 'fabio@gmail.com';
        $user2->password = '1234';
        $user2->save();

        $user3 = new User();
        $user3->name = 'dania cruz';
        $user3->email = 'dania@gmail.com';
        $user3->password = '1234';
        $user3->save();

        $user4 = new User();
        $user4->name = 'wilian macias';
        $user4->email = 'wilian@gmail.com';
        $user4->password = '1234';
        $user4->save();

        $user5 = new User();
        $user5->name = 'amanda zambrano';
        $user5->email = 'amanda@gmail.com';
        $user5->password = '1234';
        $user5->save();

        $user6 = new User();
        $user6->name = 'german alfonzo';
        $user6->email = 'german@gmail.com';
        $user6->password = '1234';
        $user6->save();

        $user7 = new User();
        $user7->name = 'brayan gonzales';
        $user7->email = 'brayan@gmail.com';
        $user7->password = '1234';
        $user7->save();

        $user8 = new User();
        $user8->name = 'camilo rodriguez';
        $user8->email = 'camilo@gmail.com';
        $user8->password = '1234';
        $user8->save();

        $user9 = new User();
        $user9->name = 'jhonatan zambrabo';
        $user9->email = 'zambrano@gmail.com';
        $user9->password = '1234';
        $user9->save();

        $user10 = new User();
        $user10->name = 'angela escobar';
        $user10->email = 'escobar@gmail.com';
        $user10->password = '1234';
        $user10->save();

        $user11 = new User();
        $user11->name = 'jhoran zapata';
        $user11->email = 'zapata@gmail.com';
        $user11->password = '1234';
        $user11->save();

        $user12 = new User();
        $user12->name = 'yonier';
        $user12->apellido = 'trompeta';
        $user12->telefono = '3202193462';
        $user12->email = 'ydtrompeta@gmail.com';
        $user12->password = '19981997';
        $user12->save();
    }
}

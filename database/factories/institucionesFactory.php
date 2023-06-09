<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class institucionesFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nit' => $this->faker->name(),
            'nombre' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->name(),
            'direccion' => $this->faker->name(),
            'correo' => $this->faker->name(),
            'password' => $this->faker->name(),

            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}

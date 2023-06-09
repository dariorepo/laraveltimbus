<?php

namespace Database\Factories;
use App\Models\rutas;

use Illuminate\Database\Eloquent\Factories\Factory;

class RutasFactory extends Factory
{

    public function definition()
    {
        return [
            'nombre' => $this->faker->streetAddress(),
            'descripcion' => $this->faker->streetAddress(),
            'precio' => $this->faker->streetAddress(),
            'horario' => $this->faker->streetAddress(),
            'imagen' => $this->faker->streetAddress(),
        ];
    }
}

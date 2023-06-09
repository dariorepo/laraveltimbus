<?php

namespace Database\Factories;
use App\Models\conductores;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConductoresFactory extends Factory
{

    public function definition()
    {
        return [
            'cedula' => $this->faker->isbn10(),
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'telefono' => $this->faker->isbn10(),
            'direccion' => $this->faker->streetAddress(),
            'correo' => $this->faker->freeEmail(),
            'password' => $this->faker->password(),

        ];
    }
}

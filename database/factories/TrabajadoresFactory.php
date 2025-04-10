<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajadores>
 */
class TrabajadoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name,
            'apellido'=>$this->faker->lastName,
            'correo'=>$this->faker->email,
            'telefono'=>$this->faker->phoneNumber,
            'direccion'=>$this->faker->address,
            'id_departamento'=>$this->faker->numberBetween(1,6)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Operator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operator>
 */
class OperatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            
            'numero_documento' => fake()->numberBetween(1,100),
            'tipo_documento' => fake()->randomElement(['DNI','Pasaporte','NIF']),
            'nombre' => fake()->firstName(),
            "apellido" => fake()->lastName(),
            "fecha_ingreso" => fake()->dateTimeBetween('-25 years', 'now'),//genera fecha y hora aleatoria
            
           
        ];
    }
}

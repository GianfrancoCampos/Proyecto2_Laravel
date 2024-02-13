<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {        
        return [
            'numero_documento' => fake()->dni(),
            'tipo_documento' => fake()->randomElement(['DNI','NIF']),
            'nombre' => fake()->name(),
            'apellidos' => fake()->lastName(),
            'calle' => fake()->streetName(),
            'numero_domicilio' => fake()->numberBetween(1, 50),
            'cod_postal' => fake()->postcode()
        ];
    }
}

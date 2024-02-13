<?php

namespace Database\Factories;

use App\Models\Operator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operator>
 */
class OperatorFactory extends Factory
{
    protected $operator = Operator::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'numero_documento' =>$this->faker->numerify('#########'),
            'tipo_documento' =>$this->faker->randomElement(['DNI', 'NIE']),
            'nombre' =>$this->faker->name(), 
            'apellido' =>$this->faker->lastName(),
            'fecha_ingreso' =>$this->faker->dateTimeBetween('2019-01-01', 'now'),
            'id_coordinador' => $this->faker->numberBetween(1, Operator::class)
        ];
    }
}

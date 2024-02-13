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
        // $idsRestantes = [];
        // $idsOperadores = Operator::pluck('id')->toArray(); // Obtener todos los IDs de los operadores
        // $idsRestantes = array_diff($idsOperadores, [2, 7]); // Filtrar los IDs para excluir los valores 2 y 7

        // $idCoordinador = null;
        // if (!empty($idsRestantes)) {
        //     $idCoordinador = $this->faker->randomElement($idsRestantes);
        // }
            
        return [
            'numero_documento' => $this->faker->numberBetween(1, 100),
            'tipo_documento' => $this->faker->randomElement(['DNI', 'NIF']),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'fecha_ingreso' => $this->faker->dateTimeBetween('-25 years', 'now'),
        ];

        }
}

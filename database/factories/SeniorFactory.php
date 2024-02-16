<?php

namespace Database\Factories;

use App\Models\Operator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Senior>
 */
class SeniorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $operadoresNoEnJuniors = Operator::whereNotIn('id', function ($query) {
            $query->select('operator_id')->from('juniors');
        })->pluck('id')->toArray();
        // Esto devolvera los id que no estan asignados, es decir los distintos a los operator_id de juniors
        
        return [
            'operator_id' => fake()->unique()->randomElement($operadoresNoEnJuniors)
        ];
    }
}

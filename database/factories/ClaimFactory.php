<?php

namespace Database\Factories;

use App\Models\Senior;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Claim>
 */
class ClaimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $operatorIds = Senior::pluck('operator_id')->toArray();
        $cod_estado = State::pluck('codigo')->toArray();
        
        return [
            'operador_id' => fake()->randomElement($operatorIds),
            'cod_estado' => fake()->randomElement($cod_estado),
            'numero' => fake()->unique()->numberBetween(1,100)
        ];
    }
}

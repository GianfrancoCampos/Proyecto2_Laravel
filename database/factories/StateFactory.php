<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $codigo_estado = function(){
            return rand(1000,9999);
        };
        return [
            'codigo' => $codigo_estado,
            'descripcion' =>fake()->randomElement(['R','E','S'])
        ];
    }
}

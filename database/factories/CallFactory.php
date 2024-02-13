<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Operator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Call>
 */
class CallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $operador_id = Operator::all()->pluck('id')->count();

        //hora aleatoria:
        // $date = fake()->time(rand(1, 24).' hours', rand(0,60).' minutes');

        return [
            
            'numero_documento_contacto_id' =>fake()->randomNumber(1,10),
            'operador_id' => fake()->randomNumber(1,$operador_id),
            'numero_telefono' => fake()->numerify('#########'),
            'fecha_llamada' => fake()->dateTime('2020-01-01'),
            'hora_llamada' => fake()->time('H:i:s'),
            'numero_linea_interno' => fake()->numerify('#########')
            // 'hora_llamada' => fake()->time('H:i:s'),


        ];
    }
}

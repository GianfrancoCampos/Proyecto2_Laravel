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
            
        ];

        
        
           
            //hacer subconjuntos del id 
            //pluck(id) //inrandomorder
            //where (id>2||8>4)
            //coger un array de los id de operador
            //agragar columna nullable
            //1º hacer seeder de los operadores y coordinadores a la vez
            //(agregar un condicionador if)cuando el valor de id sigual a '7' sera === a null


         
    }
}

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
        // $idsOperadores = Operator::pluck('id')->toArray(); // Obtener todos los IDs de los operadores
        $id = Operator::all()->pluck('id')->toArray();
        $idsRestantes = array_diff($id, [2, 7]); // Filtrar los IDs para excluir los valores 2 y 7

        $idCoordinador = null;
        
        if (!empty($idsRestantes)) {
            // Elegir aleatoriamente un ID de los restantes
            $idCoordinador = $this->faker->randomElement($idsRestantes);
        }

        return [
            'id_coordinador' => $idCoordinador,
            'numero_documento' => $this->faker->dni(),
            'tipo_documento' => $this->faker->randomElement(['DNI', 'NIF']),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'fecha_ingreso' => $this->faker->dateTimeBetween('2019-01-01', 'now'),
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

<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'codigo' => strtoupper($this->faker->lexify('???-???')),
            'nombre' => $this->faker->word(),
            'creditos' => $this->faker->numberBetween(1, 5),
            'id_profesor' => Profesor::inRandomOrder()->first()->id, // Asociamos aleatoriamente un profesor
        ];
    }
}

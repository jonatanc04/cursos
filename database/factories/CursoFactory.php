<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

class CursoFactory extends Factory
{

    protected $model = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => "Curso " . $this->faker->numberBetween(1,99),
            'curso' => "23/24",
            'id_user' => "1"
            ];
    }
}

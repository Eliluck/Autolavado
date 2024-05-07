<?php

namespace Database\Factories;

use App\Models\DirSatCol;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirSatColFactory extends Factory
{
    /**
     * The name of the model that the factory's corresponding.
     *
     * @var string
     */
    protected $model = DirSatCol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ColCod' => $this->faker->unique()->numerify('###'), // Genera un código único
            'ColNom' => $this->faker->streetName, // Usa el nombre de una calle como nombre de colonia
            'CP' => $this->faker->postcode, // Genera un código postal
        ];
    }
}

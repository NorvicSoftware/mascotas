<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Refugio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->numberBetween(1000, 100000),
            'nombre' => $this->faker->firstName(),
            'tipo' => $this->faker->randomElement(['Perro','Gato', 'Cabras']),
            'edad' => $this->faker->randomDigit(),
            'raza' => $this->faker->name(),
            'color'=> $this->faker->colorName(),
            'pedigri' => $this->faker->name(),
            'refugio_id' => Refugio::all()->random()->id,

        ];
    }
}

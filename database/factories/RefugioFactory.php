<?php

namespace Database\Factories;

use App\Models\Refugio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Refugio>
 */
class RefugioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => 'Refugio ' . fake()->unique()->city(),
            'ciudad' => fake()->city(),
            'direccion' => fake()->address(),
            'telefono' => fake()->numerify('########'),
            'encargado' => fake()->name(),
        ];
    }
}

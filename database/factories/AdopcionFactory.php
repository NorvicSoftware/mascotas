<?php

namespace Database\Factories;

use App\Models\Adopcion;
use App\Models\Mascota;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Adopcion>
 */
class AdopcionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => fake()->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
            'mascota_id' => Mascota::factory(),
            'persona_id' => Persona::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Refugio;
use App\Models\Mascota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mascota>
 */
class MascotaFactory extends Factory
{
    private const RAZAS = [
        'Perro' => ['Labrador', 'Pastor Aleman', 'Chihuahua', 'Bulldog', 'Poodle', 'Criollo'],
        'Gato' => ['Persa', 'Siames', 'Angora', 'Comun Europeo', 'Criollo'],
        'Cabras' => ['Boer', 'Saanen', 'Alpina', 'Criolla'],
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipo = fake()->randomElement(['Perro', 'Gato', 'Cabras']);

        return [
            'codigo' => 'MAS-' . fake()->unique()->numerify('#####'),
            'tipo' => $tipo,
            'nombre' => fake()->firstName(),
            'edad' => fake()->numberBetween(0, 15),
            'raza' => fake()->randomElement(self::RAZAS[$tipo]),
            'color' => fake()->safeColorName(),
            'pedigri' => fake()->boolean(30) ? fake()->bothify('PED-####??') : null,
            'url' => fake()->boolean(60) ? fake()->imageUrl(400, 400, 'animals') : null,
            'refugio_id' => Refugio::factory(),
        ];
    }
}

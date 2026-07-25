<?php

namespace Database\Seeders;

use App\Models\Adopcion;
use App\Models\Mascota;
use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdopcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cada mascota puede adoptarse a lo sumo una vez.
        $mascotas = Mascota::inRandomOrder()->take(12)->get();
        $personas = Persona::all();

        $mascotas->each(function (Mascota $mascota) use ($personas) {
            Adopcion::factory()->create([
                'mascota_id' => $mascota->id,
                'persona_id' => $personas->random()->id,
            ]);
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Mascota;
use App\Models\Refugio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mascota::factory(20)
            ->recycle(Refugio::all())
            ->create();
    }
}

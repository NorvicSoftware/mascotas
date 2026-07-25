<?php

namespace Database\Seeders;

use App\Models\Refugio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefugioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Refugio::factory(5)->create();
    }
}

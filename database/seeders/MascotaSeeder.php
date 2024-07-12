<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mascota;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mascata = new Mascota();
        $mascata->codigo = '12323222';
        $mascata->nombre = 'Rambo';
        $mascata->tipo = 'Perro';
        $mascata->edad = 3;
        $mascata->raza = 'Normal';
        $mascata->color = 'cafe';
        $mascata->pedigri = 'normal';
        $mascata->refugio_id = 1;
        $mascata->save();

        $mascata2 = new Mascota();
        $mascata2->codigo = '111111';
        $mascata2->nombre = 'Ferno';
        $mascata2->tipo = 'Perro';
        $mascata2->edad = 7;
        $mascata2->raza = 'Normal';
        $mascata2->color = 'Gris';
        $mascata2->pedigri = 'normal';
        $mascata2->refugio_id = 2;
        $mascata2->save();
    }
}

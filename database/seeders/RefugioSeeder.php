<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Refugio;
use Illuminate\Support\Facades\DB;

class RefugioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $refugio = new Refugio();
        $refugio->nombre = "Refugio Las Palmas";
        $refugio->ciudad = "Lima";
        $refugio->direccion = "Av. Simon Bolivar";
        $refugio->telefono = "5152522552";
        $refugio->encargado = "Tomas Delgado";
        $refugio->save();

        $refugio2 = new Refugio();
        $refugio2->nombre = "Refugio Mis mascotas";
        $refugio2->ciudad = "Lima";
        $refugio2->direccion = "Av. Segunda";
        $refugio2->telefono = "512485121";
        $refugio2->encargado = "Juan Cardona";
        $refugio2->save();


    }
}

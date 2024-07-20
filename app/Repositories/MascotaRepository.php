<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class MascotaRepository
{
    public function getMascotas(){
        $mascotas = DB::table('mascotas')
            ->join('refugios', 'refugios.id', '=', 'mascotas.refugio_id')
            ->select('mascotas.*', 'refugios.nombre as refugio', 'refugios.ciudad')
            ->where('mascotas.edad', '>', 5)
            ->get();

        return $mascotas;
    }

}
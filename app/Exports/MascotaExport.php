<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Mascota;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class MascotaExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     return DB::table('mascotas')
    //         ->join('refugios', 'refugios.id', '=', 'mascotas.refugio_id')
    //         ->select('mascotas.*', 'refugios.nombre as refugio', 'refugios.ciudad')
    //         ->where('mascotas.edad', '>', 5)
    //         ->get();
    // }

    public function view(): View {
        $mascotas = DB::table('mascotas')
        ->join('refugios', 'refugios.id', '=', 'mascotas.refugio_id')
        ->select('mascotas.*', 'refugios.nombre as refugio', 'refugios.ciudad')
        ->where('mascotas.edad', '>', 5)
        ->get();
        return view('reportes.mascotas.excel', ['mascotas' => $mascotas]);

    }
}

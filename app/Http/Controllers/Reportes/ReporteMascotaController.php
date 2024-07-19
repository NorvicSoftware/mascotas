<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use  App\Exports\MascotaExport;

class ReporteMascotaController extends Controller
{
    public function listar()
    {
        // $mascotas = Mascota::where('edad', '>', 5)->get();
        $mascotas = DB::table('mascotas')
            ->join('refugios', 'refugios.id', '=', 'mascotas.refugio_id')
            ->select('mascotas.*', 'refugios.nombre as refugio', 'refugios.ciudad')
            ->where('mascotas.edad', '>', 5)
            ->get();
        return view('reportes.mascotas.listar', ['mascotas' => $mascotas]);
    }

    public function pdf()
    {
        $data = [
            'mascotas' => DB::table('mascotas')
                ->join('refugios', 'refugios.id', '=', 'mascotas.refugio_id')
                ->select('mascotas.*', 'refugios.nombre as refugio', 'refugios.ciudad')
                ->where('mascotas.edad', '>', 5)
                ->get(),
        ];
        $pdf = Pdf::loadView('reportes.mascotas.pdf', $data);
        return $pdf->download('mascotas.pdf');
    }

    public function excel(){
        return Excel::download(new MascotaExport, 'mascota.xlsx');
    }
}

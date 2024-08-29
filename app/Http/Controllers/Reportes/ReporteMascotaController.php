<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use  App\Exports\MascotaExport;
use App\Repositories\MascotaRepository;

class ReporteMascotaController extends Controller
{
    protected $mascotasA;

    public function __construct(MascotaRepository $mascotas)
    {
        $this->mascotasA = $mascotas;
    }

    public function listar()
    {
        $mascotas = DB::table('mascotas')->join('refugios', 'refugios.id', '=', 'mascotas.refugio_id')->where('edad', '>', 3)->select('mascotas.nombre as mascota', 'refugios.nombre', 'mascotas.edad')->get();
        return view('reportes.mascotas.listar', ['mascotas' => $mascotas]);
    }

    public function pdf()
    {
        $data = [
            'mascotas' => $this->mascotasA->getMascotas(),
        ];
        $pdf = Pdf::loadView('reportes.mascotas.pdf', $data);
        return $pdf->download('mascotas.pdf');
    }

    public function excel(){
        return Excel::download(new MascotaExport, 'mascota.xlsx');
    }
}

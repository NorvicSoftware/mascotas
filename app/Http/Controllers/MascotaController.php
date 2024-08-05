<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Models\Refugio;
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();
        // $mascotas = Mascota::all();
        // $mascotas =  Mascota::where('edad', '>', 5)->get();
        // $mascotas = DB::table('mascotas')->get();
        // return response()->json($mascotas);
        return view('mascotas.listar', ['mascotas' => $mascotas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $refugios = Refugio::all();
        return view('mascotas.crear', ['refugios' => $refugios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:75',
            'codigo' => 'required|min:3|max:35',
            'tipo' => 'required',
            'edad' => 'required|numeric',
            'raza' => 'required',
            'color' => 'required',
            'refugio_id' => 'required',
        ]);

        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;
        $mascota->codigo = $request->codigo;
        $mascota->tipo = $request->tipo;
        $mascota->edad = $request->edad;
        $mascota->raza = $request->raza;
        $mascota->color = $request->color;
        $mascota->pedigri = $request->pedigri;
        $mascota->refugio_id = $request->refugio_id;
        if ($request->hasFile('image')) {
            $image_path = 'public/images';
            $image = $request->file('image');
            $name_image = time() . "-" . $image->getClientOriginalName();
            $request->file('image')->storeAs($image_path, $name_image);

            $mascota->url = $name_image;
            
        }
        $mascota->save();

        return redirect()->action([MascotaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mascota = Mascota::find($id);
        return view('mascotas.mostrar', ['mascota' => $mascota]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $refugios = Refugio::all();
        $mascota = Mascota::find($id);
        return view('mascotas.editar', ['refugios' => $refugios, 'mascota' => $mascota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:75',
            'codigo' => 'required|min:3|max:35',
            'tipo' => 'required',
            'edad' => 'required|numeric',
            'raza' => 'required',
            'color' => 'required',
            'refugio_id' => 'required',
        ]);

        $mascota = Mascota::find($id);
        $mascota->nombre = $request->nombre;
        $mascota->codigo = $request->codigo;
        $mascota->tipo = $request->tipo;
        $mascota->edad = $request->edad;
        $mascota->raza = $request->raza;
        $mascota->color = $request->color;
        $mascota->pedigri = $request->pedigri;
        $mascota->refugio_id = $request->refugio_id;
        if ($request->hasFile('image')) {
            $image_path = 'public/images';
            $image = $request->file('image');
            $name_image = time() . "-" . $image->getClientOriginalName();
            $request->file('image')->storeAs($image_path, $name_image);

            $mascota->url = $name_image;
        }

        $mascota->save();

        return redirect()->action([MascotaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascota = Mascota::find($id);
        $mascota->delete();

        return redirect()->action([MascotaController::class, 'index']);
    }
}

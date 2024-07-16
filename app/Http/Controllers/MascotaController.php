<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
Mascota::all();
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();
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
        return view('mascotas.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // try{

        // }
        // catch(){

        // }
        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;
        $mascota->codigo = $request->codigo;
        $mascota->tipo = $request->tipo;
        $mascota->edad = $request->edad;
        $mascota->raza = $request->raza;
        $mascota->color = $request->color;
        $mascota->pedigri = $request->pedigri;
        $mascota->refugio_id = $request->refugio_id;
        $mascota->save();

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
        $mascota = Mascota::find($id);
        return view('mascotas.editar', ['mascota' => $mascota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mascota = Mascota::find($id);
        $mascota->nombre = $request->nombre;
        $mascota->codigo = $request->codigo;
        $mascota->tipo = $request->tipo;
        $mascota->edad = $request->edad;
        $mascota->raza = $request->raza;
        $mascota->color = $request->color;
        $mascota->pedigri = $request->pedigri;
        $mascota->refugio_id = $request->refugio_id;
        $mascota->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascota = Mascota::find($id);
        $mascota->delete();
    }
}

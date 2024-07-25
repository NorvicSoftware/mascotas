<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adopcion;
use App\Models\Persona;
use App\Models\Mascota;

class AdopcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adopciones = Adopcion::all();
        return view('adopciones.listar', ['adopciones' => $adopciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = Persona::all();
        $mascotas = Mascota::all();
        return view('adopciones.crear', ['personas' => $personas, 'mascotas' => $mascotas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date_format:"Y-m-d"',
            'mascota_id' => 'required',
            'persona_id' => 'required',
        ]);

        $adopcion = new Adopcion();
        $adopcion->fecha = $request->fecha;
        $adopcion->mascota_id = $request->mascota_id;
        $adopcion->persona_id = $request->persona_id;
        $adopcion->save(); 

        return redirect()->action([AdopcionController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $adopcion = Adopcion::find($id);
        return view('adopciones.mostrar', ['adopcion' => $adopcion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personas = Persona::all();
        $mascotas = Mascota::all();
        $adopcion = Adopcion::find($id);
        return view('adopciones.editar', ['adopcion' => $adopcion, 'personas' => $personas, 'mascotas' => $mascotas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fecha' => 'required|date_format:"Y-m-d"',
            'mascota_id' => 'required',
            'persona_id' => 'required',
        ]);

        $adopcion = Adopcion::find($id);
        $adopcion->fecha = $request->fecha;
        $adopcion->mascota_id = $request->mascota_id;
        $adopcion->persona_id = $request->persona_id;
        $adopcion->save(); 

        return redirect()->action([AdopcionController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adopcion = Adopcion::find($id);
        $adopcion->delete();
        return redirect()->action([AdopcionController::class, 'index']);
    }
}

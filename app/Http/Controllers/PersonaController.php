<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.listar', ['personas' => $personas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|min:3|max:35',
            'nombre' => 'required|max:75',
        ]);

        $persona = new Persona();
        $persona->dni = $request->dni;
        $persona->nombre = $request->nombre;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->save();

        return redirect()->action([PersonaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $persona = Persona::find($id);
        return view('personas.mostrar', ['persona' => $persona]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $persona = Persona::find($id);
        return view('personas.editar', ['persona' => $persona]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'dni' => 'required|min:3|max:35',
            'nombre' => 'required|max:75',
        ]);

        $persona = Persona::find($id);
        $persona->dni = $request->dni;
        $persona->nombre = $request->nombre;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->save();

        return redirect()->action([PersonaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return redirect()->action([PersonaController::class, 'index']);
    }
}

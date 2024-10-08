<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refugio;

class RefugioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $refugios = Refugio::all();
        // return response()->json(csrf_token());
        return view('refugios.listar', ['refugios' => $refugios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('refugios.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:75',
            'ciudad' => 'required|min:3|max:35',
            'encargado' => 'required|max:75',
        ]);

        $refugio = DB::table('refugios')->insert(['nombre' => $request->nombre, 'ciudad' => $request->ciudad, 'encargado' => $request->encargado]);

        // $refugio = new Refugio();
        // $refugio->nombre = $request->nombre;
        // $refugio->ciudad = $request->ciudad;
        // $refugio->direccion = $request->direccion;
        // $refugio->telefono = $request->telefono;
        // $refugio->encargado = $request->encargado;
        // $refugio->save(); 

        return redirect()->action([RefugioController::class, 'index']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $refugio = Refugio::find($id);
        return view('refugios.mostrar', ['refugio' => $refugio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $refugio = Refugio::find($id);
        return view('refugios.editar', ['refugio' => $refugio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $refugio = Refugio::find($id);
        $refugio->nombre = $request->nombre;
        $refugio->ciudad = $request->ciudad;
        $refugio->direccion = $request->direccion;
        $refugio->telefono = $request->telefono;
        $refugio->encargado = $request->encargado;
        $refugio->save();

        return redirect()->action([RefugioController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $refugio = Refugio::find($id);
        $refugio->delete();
        return redirect()->action([RefugioController::class, 'index']);
    }
}

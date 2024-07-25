<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefugioController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\Reportes\ReporteMascotaController;



Route::get('/refugios', [RefugioController::class, 'index']);
Route::get('/refugios/registrar', [RefugioController::class, 'create']);
Route::post('/refugios/registrar', [RefugioController::class, 'store'])->name('refugios.registrar');
Route::get('/refugios/mostrar/{id}', [RefugioController::class, 'show']);
Route::get('/refugios/editar/{id}', [RefugioController::class, 'edit']);
Route::put('/refugios/actualizar/{id}', [RefugioController::class, 'update'])->name('refugios.actualizar');
Route::delete('/refugios/eliminar/{id}', [RefugioController::class, 'destroy'])->name('refugios.eliminar');

Route::get('/mascotas', [MascotaController::class, 'index']);
Route::get('/mascotas/registrar', [MascotaController::class, 'create']);
Route::post('/mascotas/registrar', [MascotaController::class, 'store'])->name('mascotas.registrar');
Route::get('/mascotas/mostrar/{id}', [MascotaController::class, 'show']);
Route::get('/mascotas/editar/{id}', [MascotaController::class, 'edit']);
Route::put('/mascotas/actualizar/{id}', [MascotaController::class, 'update'])->name('mascotas.actualizar');
Route::delete('/mascotas/eliminar/{id}', [MascotaController::class, 'destroy'])->name('mascotas.eliminar');

Route::get('/personas', [PersonaController::class, 'index']);
Route::get('/personas/registrar', [PersonaController::class, 'create']);
Route::post('/personas/registrar', [PersonaController::class, 'store'])->name('personas.registrar');
Route::get('/personas/mostrar/{id}', [PersonaController::class, 'show']);
Route::get('/personas/editar/{id}', [PersonaController::class, 'edit']);
Route::put('/personas/actualizar/{id}', [PersonaController::class, 'update'])->name('personas.actualizar');
Route::delete('/personas/eliminar/{id}', [PersonaController::class, 'destroy'])->name('personas.eliminar');

Route::get('/adopciones', [AdopcionController::class, 'index']);
Route::get('/adopciones/registrar', [AdopcionController::class, 'create']);
Route::post('/adopciones/registrar', [AdopcionController::class, 'store'])->name('adopciones.registrar');
Route::get('/adopciones/mostrar/{id}', [AdopcionController::class, 'show']);
Route::get('/adopciones/editar/{id}', [AdopcionController::class, 'edit']);
Route::put('/adopciones/actualizar/{id}', [AdopcionController::class, 'update'])->name('adopciones.actualizar');
Route::delete('/adopciones/eliminar/{id}', [AdopcionController::class, 'destroy'])->name('adopciones.eliminar');


Route::get('/reportes/mascotas', [ReporteMascotaController::class, 'listar'])->name('reportes.mascota.listar');
Route::get('/reportes/mascotas/pdf', [ReporteMascotaController::class, 'pdf'])->name('reportes.mascota.pdf');
Route::get('/reportes/mascotas/excel', [ReporteMascotaController::class, 'excel'])->name('reportes.mascota.excel');


Route::get('/', function () {

    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefugioController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\Reportes\ReporteMascotaController;



Route::get('/refugios', [RefugioController::class, 'index']);
Route::get('/refugios/registrar', [RefugioController::class, 'create']);
Route::post('/refugios/registrar', [RefugioController::class, 'store'])->name('refugios.registrar');
Route::get('/refugios/mostrar/{id}', [RefugioController::class, 'show']);

Route::get('/refugios/editar/{id}', [RefugioController::class, 'edit']);
Route::put('/refugios/actualizar/{id}', [RefugioController::class, 'update'])->name('refugios.actualizar');
Route::delete('/refugios/eliminar/{id}', [RefugioController::class, 'destroy'])->name('refugios.eliminar');




Route::get('/mascotas', [MascotaController::class, 'index']);


Route::get('/reportes/mascotas', [ReporteMascotaController::class, 'listar'])->name('reportes.mascota.listar');
Route::get('/reportes/mascotas/pdf', [ReporteMascotaController::class, 'pdf'])->name('reportes.mascota.pdf');
Route::get('/reportes/mascotas/excel', [ReporteMascotaController::class, 'excel'])->name('reportes.mascota.excel');


Route::get('/', function () {

    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefugioController;
use App\Http\Controllers\MascotaController;



Route::get('/refugios', [RefugioController::class, 'index']);

Route::get('/mascotas', [MascotaController::class, 'index']);




Route::get('/', function () {
    // $refugio = new Refugio();
    // $refugio->nombre = "Refugio Mis mascotas";
    // $refugio->ciudad = "Lima";
    // $refugio->direccion = "Av. Los Lirios";
    // $refugio->telefono = "5456433444";
    // $refugio->encargado = "Juan Mateo Cardona";
    // $refugio->save();

    // $mascata = new Mascota();
    // $mascata->codigo = '12323222';
    // $mascata->nombre = 'Pepito';
    // $mascata->tipo = 'Perro';
    // $mascata->edad = 3;
    // $mascata->raza = 'Normal';
    // $mascata->color = 'cafe';
    // $mascata->pedigri = 'normal';
    // $mascata->refugio_id = 1;
    // $mascata->save();

    // $mascata2 = new Mascota();
    // $mascata2->codigo = '22222222';
    // $mascata2->nombre = 'Nala';
    // $mascata2->tipo = 'Gato';
    // $mascata2->edad = 1;
    // $mascata2->raza = 'Normal';
    // $mascata2->color = 'Blanco';
    // $mascata2->pedigri = 'normal';
    // $mascata2->refugio_id = 1;
    // $mascata2->save();

    // $refugio = Refugio::find(1);// select * from refugios where id = 1;
    

    return view('welcome');
});

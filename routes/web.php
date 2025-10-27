<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Definición básica de rutas
Route::get('/hola', function () {
    $nombre = "Edgar Poot,";
    return "Hola, buen día {$nombre}";
});

//Parámetros en las rutas
//Parámetros Requeridos
Route::get('/usuario/{nombre}', function ($nombre) {
    return "Usuario: $nombre";
});

//Parámetros con valores por defecto
Route::get('/usuario/{nombre?}', function ($nombre = 'Default') {
    return "Usuario: $nombre";
});

//Rutas nombradas
Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil'); //nombre interno a la ruta.

//Redirección de rutas
Route::redirect('/ruta-anterior', '/ruta-nueva');

Route::get('/ruta-nueva', function () {
    return "Ruta nueva, lo estás haciendo bien";
});

//Vista directa
Route::view('/bienvenido', 'welcome');

//Grupos de ruta
//Agrupación con prefijos
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard1', function () {
        return "Hello Admin dashboard 1";
    });
    Route::get('/dashboard2', function () {
        return "Hello Admin dashboard 2";
    });
});

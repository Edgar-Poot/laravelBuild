<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EntradaController;

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

// Helpers
//env() -> obtener variables de entorno
Route::get('db', function () {
    return 'La base de datos usada es: ' . env('DB_CONNECTION');
});
//dd() -> depuración rápida
Route::get('dd', function () {
    $nombre = "Edgar";
    dd($nombre);
    return env('DB_CONNECTION');
});
//config() -> acceder a las configuraciones de la aplicación
Route::get('/app', function () {
    return 'Zona horaria: ' . config('app.timezone') . ". Nombre de la app: " . config('app.name');
});

//Route::view('producto', 'almacen.producto');
Route::get('producto', function () {
    //return view('almacen.producto', ['nombre' => 'Impresora LX300', 'marca' => 'Epson']);
    //return view('almacen.producto')->with(['nombre' => 'Impresora LX300', 'marca' => 'Epson']);
    $nombre = "Impresora LX300";
    $marca = "Epson";
    return view('almacen.producto', compact('nombre', 'marca'));
});

Route::get('condicional/{nota}', function ($nota = 12) {
    return view('estructuras.condicional', compact('nota'));
});

Route::get('control/{numero}', function ($numero = 2) {
    return view('estructuras.switch', compact('numero'));
});

Route::get('while/{numero}', function ($numero = 2) {
    return view('estructuras.while', compact('numero'));
});

Route::get('foreach/{numero}', function ($numero = 2) {
    $lista = ["platanos", "naranjas", "uvas", "mandarinas"];
    return view('estructuras.foreach', compact('lista'));
});

Route::get('categoria', function () {
    return view('categoria');
});
Route::get('contacto', function () {
    return view('contacto');
});

//Query builder
//Obtener datos
Route::get('query', function () {
    $entradas = DB::table('entradas')->get();
    return $entradas;
});

//Obtener el primer registro
Route::get('find', function () {
    $entradas = DB::table('entradas')->first();
    return $entradas;
});

//Filtrado de datos
Route::get('filtro', function () {
    $entradas = DB::table('entradas')
        ->where('user_id', 1)
        ->where('titulo', 'LIKE', 'a%') //comienzan con la letra A
        ->orWhere('titulo', 'LIKE', 'b%')->get();
    return $entradas;
});

//Otros métodos que nos van a permitir realizar consultas tambien.
//whereNull()
//whereNotNull()
//whereIn()
//whereNotIn()
//whereBetween
//whereNotBetween

//JOINS con query builder

Route::get('join', function () {
    $entradas = DB::table('entradas')
        ->join('users', 'entradas.user_id', '=', 'users.id')
        //->select('entradas.id', 'entradas.titulo', 'entradas.tag', 'entradas.imagen', 'users.email')
        ->get();
    return $entradas;
});

//leftJoin()
//rightJoin()
//joinWhere()

// Inserción de registros
Route::get('/insert', function () {
    $insertado = DB::table('users')
        ->insert([
            "name" => "Juan Pérez",
            "email" => "juan@prueba.com",
            "password" => "juan"
        ]);
    return $insertado;
});

//Obtener
Route::get('/getId', function () {
    $id = DB::table('users')
        ->insertGetId([
            "name" => "Juan Pérez",
            "email" => "juan2@prueba.com",
            "password" => "juan2"
        ]);
    return $id;
});


//Controllers
//Route::get('entrada', [EntradaController::class, 'index']);
//Route::resource('entrada', EntradaController::class);
//Route::resource('entrada', EntradaController::class)->only('index', 'show');
Route::resource('entrada', EntradaController::class)->except('destroy', 'update');
Route::get('respuesta', function () {
    return response('Hola esta es una respuesta: ', 200); //Código de respuesta HTTP
});
Route::get('respuesta2', function () {
    return response('Hola esta es una respuesta: ', 404); //Código de respuesta HTTP
});

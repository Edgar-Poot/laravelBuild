<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //return view('entrada.index');
        //$entradas = Entrada::all();
        //return view('entrada.index', compact('entradas'));
        //return "Index";
        //return $request->query();
        //return $request->path();
        //return $request->url();
        return $request->input('titulo', 'Sin título');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entrada.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /**
         * Antes de crear el modelo y guardarlo hay que validar
         * Aunque validar en el controlador funciona. Es una mala practica
         * Porque sobrecarga el controlador con lógica que debería manejarse por separado
         */
        $request->validate([
            'tag' => 'required|string|max:20',
            'titulo' => 'required|string|max:50',
            'contenido' => 'required|string'
        ], [
            'titulo.required' => 'El campo de título es obligatorio.',
            'titulo.string' => 'El título debe ser una cadena de texto.',
            'titulo.max' => 'El título no puede superar los 50 caracteres.',

            'tag.required' => 'El campo de tag es obligatorio.',
            'tag.string' => 'El tag debe ser una cadena de texto.',
            'tag.max' => 'El tag no puede superar los 20 caracteres.',

            'contenido.required' => 'El campo de contenido es obligatorio.',
            'contenido.string' => 'El contenido debe ser una cadena de texto.',
        ]);

        $entrada = new Entrada();
        $entrada->titulo = $request->input('titulo');
        $entrada->tag = $request->input('tag');
        $entrada->contenido = $request->input('contenido');
        $entrada->imagen = "";
        $entrada->user_id = 1;
        $entrada->save();

        return redirect()->route('entrada.create')->with('success', '¡Entrada creada con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrada $entrada)
    {
        return "Show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrada $entrada)
    {
        return "Edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrada $entrada)
    {
        return "Update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrada $entrada)
    {
        return "Destroy";
    }
}

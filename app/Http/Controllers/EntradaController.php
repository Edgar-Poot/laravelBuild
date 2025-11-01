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
        return "Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store";
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

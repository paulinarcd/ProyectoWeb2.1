<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talla;


class TallasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tallas = Talla::all();
        return view("tallas.gestion_tallas", compact("tallas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreTalla'=> 'required', 
        ]); 

        $tallas = new Talla();
        $tallas->nombre=$request->nombreTalla;
        $tallas->save();
        return redirect()->route("tallas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tallas = Talla::find($id);
        return view("tallas.editar_tallas", compact("tallas"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombreTalla'=> 'required', 
        ]); 
        
        $tallas = Talla::find($id);
        $tallas->nombre=$request->nombreTalla;
        $tallas->save();
        return redirect()->route("tallas.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tallas = Talla::find($id);
        $tallas->delete();
        return redirect()->route("tallas.index");
    }
}

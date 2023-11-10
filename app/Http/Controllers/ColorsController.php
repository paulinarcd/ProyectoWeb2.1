<?php

namespace App\Http\Controllers;
use App\Models\Colors;

use Illuminate\Http\Request;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Colors::all();
        return view("colores.gestion_colores", compact("colors"));
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
            'nombreColor'=> 'required', 
        ]); 

        $colors = new Colors();
        $colors->nombre=$request->nombreColor;
        $colors->save();
        return redirect()->route("colores.index");
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
        $colors = Colors::find($id);
        return view("colores.editar_colores", compact("colors"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombreColor'=> 'required', 
        ]); 
        
        $colors = Colors::find($id);
        $colors->nombre=$request->nombreColor;
        $colors->save();
        return redirect()->route("colores.index");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $colors = Colors::find($id);
        $colors->delete();
        return redirect()->route("colores.index");
    }
}

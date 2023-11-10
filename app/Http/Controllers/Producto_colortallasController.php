<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Talla;
use App\Models\Colors;
use App\Models\Producto_ColorTalla;

use Illuminate\Http\Request;

class Producto_colortallasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodtc= Producto_ColorTalla::all();
        $productos = Producto::all();
        $tallas = Talla::all();
        $colors = Colors::all();
        return view("",compact("prodtc, productos, tallas, colors"));
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
            'producto'=> 'required', 
            'talla'=> 'required', 
            'color'=> 'required', 
        ]); 
        $prodtc = new Producto_ColorTalla();
        $prodtc->id_producto=$request->producto;
        $prodtc->id_talla=$request->talla;
        $prodtc->id_color=$request->color;
        $prodtc->save();
        return redirect()->route("productoTC.index");

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
        $prodtc = Producto_ColorTalla::find($id);
        return view("",compact("prodtc"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'producto'=> 'required', 
            'talla'=> 'required', 
            'color'=> 'required', 
        ]); 
        $prodtc = Producto_ColorTalla::find($id);
        $prodtc->id_producto=$request->producto;
        $prodtc->id_talla=$request->talla;
        $prodtc->id_color=$request->color;
        $prodtc->save();
        return redirect()->route("productoTC.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodtc = Producto_ColorTalla::find($id);
        $prodtc->delete();
        return redirect()->route("productoTC.index");
    }
}

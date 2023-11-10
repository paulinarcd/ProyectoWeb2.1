<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Producto;
use App\Models\User;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = Compra::all();
        $productos = Producto::all();
        $users = User::all();
        return view("",compact("compras, productos, users"));
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
            'fecha'=> 'required', 
            'cantidad'=> 'required', 
            'idProducto'=> 'required', 
        ]); 
        
        $compras = new Compra();
        $compras->fecha=$request->fecha;
        $compras->cantidad=$request->cantidad;
        $compras->id_producto=$request->idProducto;
        $compras->save();
        return redirect()->route("compras.index");

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
        $compras = Compra::find($id);
        return view("compras.editar_compras", compact("compras"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fecha'=> 'required', 
            'cantidad'=> 'required', 
            'idProducto'=> 'required', 
        ]); 

        $compras = Compra::find($id);
        $compras->fecha=$request->fecha;
        $compras->cantidad=$request->cantidad;
        $compras->id_producto=$request->idProducto;
        $compras->save();
        return redirect()->route("compras.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $compras = Compra::find($id);
        $compras->delete();
        return redirect()->route("compras.index");

    }
}

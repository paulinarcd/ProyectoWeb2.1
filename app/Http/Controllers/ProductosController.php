<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\User;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $users = User::all();
        return view("", compact('productos', 'categorias', 'users'));
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
            'nombreProducto'=> 'required', 
            'cantidad'=> 'required', 
            'precio'=> 'required', 
            'genero'=> 'required', 
            'imagen'=> 'required', 
            'idCategoria'=> 'required', 
            'idUser'=> 'required', 
        ]); 
        $producto = new Producto();
        $producto->nombre = $request->nombreProducto;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->genero = $request->genero;
        $producto->imagen = $request->imagen;
        $producto->id_categoria = $request->idCategoria;
        $producto->id_user = $request->idUser;
        $producto->save();
        return redirect()->route('');
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
        $producto = Producto::find($id);
        return view("", compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombreProducto'=> 'required', 
            'cantidad'=> 'required', 
            'precio'=> 'required', 
            'genero'=> 'required', 
            'imagen'=> 'required', 
            'idCategoria'=> 'required', 
            'idUser'=> 'required', 
        ]); 

        $producto = Producto::find($id);        
        $producto->nombre = $request->nombreProducto;
        $producto->cantidad = $request->catidad;
        $producto->precio = $request->precio;
        $producto->genero = $request->genero;
        $producto->imagen = $request->imagen;
        $producto->id_categoria = $request->idCategoria;
        $producto->id_user = $request->idUser;
        $producto->save();
        return redirect()->route('.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('.index');
    }
}

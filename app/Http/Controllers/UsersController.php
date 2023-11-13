<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('usuarios.gestion_usuarios', compact('users'));
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
        // $request->validate([
        //     'nombreProducto'=> 'required', 
        //     'cantidad'=> 'required', 
        //     'precio'=> 'required', 
        //     'genero'=> 'required', 
        //     'imagen'=> 'required', 
        //     'categoria'=> 'required', 
        //     'user'=> 'required', 
        // ]); 

        // $producto = new Producto();
        // $producto->nombre = $request->nombreProducto;
        // $producto->cantidad = $request->cantidad;
        // $producto->precio = $request->precio;
        // $producto->genero = $request->genero;
        // $producto->imagen = $request->imagen;
        // $producto->id_categoria = $request->categoria;
        // $producto->id_user = $request->user;
        // $producto->save();
        // return redirect()->route('productos.index');
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
        $users = User::find($id);
        $rols = Rol::all();
        return view("usuarios.editar_usuarios", compact('users','rols'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);        
        $users->name = $request->nameuser;
        $users->email = $request->email;
        $users->password = $request->passw;
        $users->rols_id = $request->rol;
        $users->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('usuarios.index');
    }
}

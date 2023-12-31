<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosExport;


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
        return view("productos.gestion_productos", compact('productos', 'categorias', 'users'));
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
            'categoria'=> 'required', 
            'user'=> 'required', 
        ]); 

        $producto = new Producto();
        $producto->nombre = $request->nombreProducto;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->genero = $request->genero;
        $producto->imagen = $request->imagen;
        $producto->id_categoria = $request->categoria;
        $producto->id_user = $request->user;
        $producto->save();
        return redirect()->route('productos.index');
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
        $productos = Producto::find($id);
        $categorias = Categoria::all();
        $users = User::all();
        return view("productos.editar_productos", compact('productos', 'categorias', 'users'));

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
            'categoria'=> 'required', 
            'user'=> 'required', 
        ]); 

        $producto = Producto::find($id);        
        $producto->nombre = $request->nombreProducto;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->genero = $request->genero;
        $producto->imagen = $request->imagen;
        $producto->id_categoria = $request->categoria;
        $producto->id_user = $request->user;
        $producto->save();
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }

    public function generar_pdf(){
        $productos = Producto::all(); 
        $pdf = app('dompdf.wrapper')->loadView('productos.generar_pdf',  compact('productos')); 
        return $pdf->stream('Listado_productos.pdf');

    }

    public function generar_excel(){    
        return Excel::download(new ProductosExport, 'productos.xlsx' ); 
    
    }

    public function index2()
    {
        $productos = Producto::all();
        return view('usuarios.ver_perfilV', compact('productos'));
    }
}

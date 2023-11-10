<?php

namespace App\Http\Controllers;
use App\Models\Talla;
use App\Models\Colors;
use App\Models\User;
use App\Models\CamisaPers;

use Illuminate\Http\Request;

class CamisapersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $camiapers= CamisaPers::all();
        $tallas = Talla::all();
        $colors = Colors::all();
        $users = User::all();
        return view("", compact("camisapers, tallas, colors"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'precio'=> 'required', 
            'imagen'=> 'required', 
            'id_talla'=> 'required', 
            'id_color'=> 'required', 

        ]); 


        $camiapers = new CamisaPers();
        $camiapers->precio=$request->precio;
        $camiapers->imagen=$request->precio;
        $camiapers->id_talla=$request->precio;
        $camiapers->id_color=$request->precio;
        $camiapers->save();
        return redirect()->route("");

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
        $camisapers = CamisaPers::find($id);
        return view("",compact("camisapers"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            'precio'=> 'required', 
            'imagen'=> 'required', 
            'id_talla'=> 'required', 
            'id_color'=> 'required', 

        ]); 
        
        $camisapers = CamisaPers::find($id);
        $camisapers->precio=$request->precio;
        $camisapers->imagen=$request->precio;
        $camisapers->id_talla=$request->precio;
        $camisapers->id_color=$request->precio;
        $camisapers->save();
        return redirect()->route("");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $camisapers = CamisaPers::find($id);
        $camisapers->delete();
        return redirect()->route("");
    }
}

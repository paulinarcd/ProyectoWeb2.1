<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_ColorTalla extends Model
{
    use HasFactory;


    public function talla()
    {
        return $this->belongsTo(Talla::class);
    }

    public function color()
    {
        return $this->belongsTo(Colors::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

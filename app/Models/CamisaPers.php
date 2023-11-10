<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamisaPers extends Model
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

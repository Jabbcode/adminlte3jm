<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    # Relacion uno a muchos (Inversa)

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
}

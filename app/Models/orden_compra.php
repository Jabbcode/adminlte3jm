<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orden_compra extends Model
{
    use HasFactory;

    protected $table = "orden_compra";

    # Relacion uno a muchos

    public function proveedor() 
    {
        return $this->hasMany('App\Models\proveedor');
    }

    # Relacion muchos a muchos

    public function productos()
    {
        return $this->belongsToMany('App\Models\producto');
    }
}

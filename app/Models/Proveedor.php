<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = "proveedors";

    protected $guarded = []; 

    # relacion muchos a muchos

    public function productos()
    {
        return $this->belongsToMany('App\Models\Producto');
    }
}

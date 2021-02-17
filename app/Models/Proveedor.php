<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = "proveedores";

    protected $guarded = []; 

    # relacion muchos a muchos

    public function productos()
    {
        return $this->belongsToMany('App\Models\Producto');
    }

    # Relacion uno a muchos (Inversa)

    public function ordenCompra()
    {
        return $this->belongsTo('App\Models\orden_compra');
    }
}

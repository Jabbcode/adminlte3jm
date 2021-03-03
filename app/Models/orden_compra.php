<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orden_compra extends Model
{
    use HasFactory;

    protected $table = "orden_compra";

    protected $fillable = [
        'id_proveedor',
        'codigo_3jm',
        'fecha_salida',
        'orden'
    ];

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

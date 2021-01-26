<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'codigo',
        'descripcion',
        'inventario_inicial',
        'unid_medida',
        'peso_unitario',
        'cantidad',
        'peso_total',
        'ubicacion',
        'ipc',
        'stock_max',
        'stock_min',
        'ubicacion_geografica',
        'monto',
        'monto_dolar'
    ];

    protected $table = "products";

    # Relacion uno a muchos
    
    public function compras()
    {
        return $this->hasMany('App\Models\Compra'); 
    }

    # Relacion uno a muchos
    
    public function categoria()
    {
        return $this->hasMany('App\Models\Categoria');
    }

    # Relacion muchos a muchos

    public function proveedores()
    {
        return $this->belongsToMany('App\Models\Proveedor');
    }

    # Relacion muchos a muchos (inversa)

    public function ordenCompra()
    {
        return $this->belongsTo('App\Models\Ordencompra', 'codigo3jm_id');
    }
}

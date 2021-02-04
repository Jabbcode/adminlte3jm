<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $fillable = [
        'slug', 
        'codigo',
        'descripcion',
        'id_categoria',
        'id_proveedor',
        'producto_critico',
        'unid_medida',
        'cantidad',
        'peso_unitario',
        'peso_total',
        'fecha_ingreso',
        'precio_unit',
        'flete_precio',
        'ubicacion',
        'ipc',
        'stock_min',
        'stock_max',
        'ubicacion_geografica',
        'inventario_inicial',
        'monto'
    ];



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


//2020_12_03_134246
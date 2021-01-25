<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordencompra extends Model
{
    use HasFactory;

    protected $table = "ordencompras";

    protected $guarded = [];

    # Relacion muchos a muchos

    public function productos()
    {
        return $this->belongsToMany('App\Models\Producto');
    }
}

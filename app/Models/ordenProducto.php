<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordenProducto extends Model
{
    use HasFactory;

    protected $table = "orden_compra_producto";

}

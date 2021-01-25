<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categoria";

    protected $guarded = [];

        # Relacion uno a muchos (Inversa)

        public function productos()
        {
            return $this->belongsTo('App\Models\Product');
        }
}

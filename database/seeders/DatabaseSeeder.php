<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Clasificacion;
use App\Models\Compra;
use App\Models\Ordencompra;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Unidades;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Categoria::factory(5)->create();
        Producto::factory(10)->create();
        Compra::factory(10)->create();
        Proveedor::factory(20)->create();
        Clasificacion::factory(10)->create();
        Ordencompra::factory(20)->create();
        Unidades::factory(5)->create();
    }
}

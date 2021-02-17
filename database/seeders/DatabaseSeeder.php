<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Clasificacion;
use App\Models\Compra;
use App\Models\orden_compra;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Unidades;
use App\Models\User;
use Database\Factories\OrdenproductoFactory;
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
        Categoria::factory(5)->create();
        Clasificacion::factory(10)->create();
        Compra::factory(10)->create();
        orden_compra::factory(10)->create();
        //OrdenproductoFactory::factory(10)->create();
        Producto::factory(10)->create();
        Proveedor::factory(20)->create();
        Unidades::factory(5)->create();
        //User::factory()->create();

    }
}

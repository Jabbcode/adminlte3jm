<?php

namespace Database\Factories;

use App\Models\orden_compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class orden_compraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = orden_compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        /* $id_proveedor = orden_compra::create(['id_proveedor'])->attach([1]); */
        /* $id_codigo = orden_compra::create(['id_codigo'])->attach([1]); */

        $id_proveedor = 1;
        $id_codigo = 1;
        $i = 0;

        return [

            'orden' => $i++,
            'fecha_salida' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}

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
        $renglon = 1;
        $unid_medida = 'U/C';
        $cantidad = $this->faker->numberBetween(1, 2000);
        $peso_unitario = $this->faker->numberBetween(0.05, 30);
        $peso = $cantidad * $peso_unitario;

        /* $id_proveedor = orden_compra::create(['id_proveedor'])->attach([1]); */
        /* $id_codigo = orden_compra::create(['id_codigo'])->attach([1]); */

        $id_proveedor = 1;
        $id_codigo = 1;

        return [
            'id_proveedor' => $id_proveedor,
            'id_codigo' => $id_codigo,
            'orden' => $this->faker->swiftBicNumber(),
            'renglon' => $renglon,
            'codigo_3jm' => $this->faker->swiftBicNumber(),
            'codigo' => $this->faker->swiftBicNumber(),
            'descripcion' => $this->faker->text(25),
            'unid_medida' => $unid_medida,
            'empaque' => $this->faker->numberBetween(1, 100),
            'bulto' => $this->faker->numberBetween(1, 2000),
            'cantidad' => $cantidad,
            'peso_unit' => $peso_unitario,
            'peso_total' => $peso,
            'precio_unit' => $this->faker->numberBetween(1, 3),
            'monto' => $this->faker->numberBetween(0, 5000),
            'fecha_salida' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}

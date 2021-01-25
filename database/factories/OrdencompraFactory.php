<?php

namespace Database\Factories;

use App\Models\Ordencompra;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdencompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ordencompra::class;

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

        return [
            'renglon' => $renglon,
            'codigo_proveedor' => $this->faker->swiftBicNumber(),
            'descripcion' => $this->faker->text(25),
            'unid_medida' => $unid_medida,
            'empaque' => $this->faker->numberBetween(1, 100),
            'bulto' => $this->faker->numberBetween(1, 2000),
            'cantidad' => $cantidad,
            'peso_unitario' => $peso_unitario,
            'peso' => $peso,
            'precio_unitario' => $this->faker->numberBetween(0.05, 1.8),
            'monto' => $this->faker->numberBetween(0, 5000),
            'fecha' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'back_orden' => $this->faker->numberBetween(0, 30),
            'nro_requisicion' => $this->faker->swiftBicNumber(),
            'requisicion_echo' => $this->faker->name(),
            'requisicion_seccion' => $this->faker->swiftBicNumber(),
            'requisicion_division' => $this->faker->swiftBicNumber(),
            'proveedor' => $this->faker->company(),
            'nro_orden_compra' => $this->faker->swiftBicNumber(),
            'en_transito' => $this->faker->biasedNumberBetween($min = 10, $max = 90),
            'entrada' => $this->faker->numberBetween(0, 5000),
            'entrada_nro_factura' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'nota_entrega' => $this->faker->swiftBicNumber(),
            'nro_factura' => $this->faker->swiftBicNumber(),
            'otros_costos' => $this->faker->numberBetween(200, 380),
            'salida' => $this->faker->numberBetween(2000, 3800),
            'salida_nro_factura' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Ordenproducto;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdenproductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ordenproducto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $renglon = 1;
        $cantidad = $this->faker->numberBetween(1, 2000);
        $peso_unitario = $this->faker->numberBetween(0.05, 30);
        $peso = $cantidad * $peso_unitario;

        return [
            'renglon' => $renglon,
            'codigo' => $this->faker->swiftBicNumber(),
            'empaque' => $this->faker->numberBetween(1, 100),
            'bulto' => $this->faker->numberBetween(1, 2000),
            'cantidad' => $cantidad,
            'peso_total' => $peso,
            'monto' => $this->faker->numberBetween(0, 5000),
        ];
    }
}

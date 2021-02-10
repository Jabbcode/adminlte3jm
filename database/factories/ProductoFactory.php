<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $descripcion = $this->faker->text(25);
        $cantidad = $this->faker->numberBetween(4000, 12000);
        $stock_max = $this->faker->numberBetween(10000, 20000);
        $stock_min = $this->faker->numberBetween(3000, 7000);

        if($cantidad <= $stock_min) {
            $producto_critico = "SI";
        } else {
            $producto_critico = 'NO';
        }

        if($producto_critico == 'SI') {
            $debajo = $stock_min - $cantidad;
            $requerido = $stock_max - $stock_min;
            $cantidad_pedir = $debajo + $requerido; 
        } else {
            $cantidad_pedir = $stock_max - $stock_min;
        }

        return [
            'codigo' => $this->faker->swiftBicNumber(),
            'descripcion' => $descripcion,
            'slug' => Str::slug($descripcion, '-'),
            'inventario_inicial' => $this->faker->numberBetween(3000, 5000),
            'peso_unitario' => $this->faker->numberBetween(0.5, 10),
            'cantidad' => $cantidad,
            'peso_total' => $this->faker->bankAccountNumber(5, 100),
            'ubicacion' => $this->faker->address(),
            'ipc' => $this->faker->numberBetween(0.2, 5),
            'stock_max' => $stock_max,
            'stock_min' => $stock_min,
            'producto_critico' => $producto_critico,
            'cantidad_pedir' => $cantidad_pedir,
            'ajuste_inventario' => $this->faker->numberBetween(0),
            'ubicacion_geografica' => $this->faker->address(),
            'monto' => $this->faker->numberBetween(1000000, 5000000),
            'precio_unit' => $this->faker->numberBetween(4000, 12000),
            'flete_precio' => $this->faker->numberBetween(4000, 12000),
            'fecha_ingreso' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}

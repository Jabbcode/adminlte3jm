<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rif' => $this->faker->ean8(),
            'nombre_empresa' => $this->faker->company(),
            'direccion' => $this->faker->address(),
            'persona_contacto' => $this->faker->name(),
            'tlf_oficina' => $this->faker->phoneNumber(),
            'tlf_movil' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->email(),
            'lugar' => $this->faker->state(),
            'observaciones' => $this->faker->text($maxNbChars = 10)
        ];
    }
}

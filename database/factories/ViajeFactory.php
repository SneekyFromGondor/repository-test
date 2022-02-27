<?php

namespace Database\Factories;

use App\Models\Viaje;
use App\Models\Raza;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ViajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $destino = $this->faker->unique()->word(10);


        return [
            'destino' => $destino,
            'slug' => Str::slug($destino),
            'descripcion' => $this->faker->text(30),
            'status' => $this->faker->randomElement([1, 2]),
            'cantidad' => $this->faker->randomDigit(),
            'raza_id' => Raza::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}

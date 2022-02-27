<?php

namespace Database\Factories;

use App\Models\Raza;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RazaFactory extends Factory
{
    public function definition()
    {
        $nombre = $this->faker->unique()->word(8);
        $var = $this->faker->unique()->word(8);

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'variando' => array(
                    'variante' => $var,
                    'tamaño' => $this->faker->randomDigit(),
                    'color' => $this->faker->word(8)
            )
        ];
    }

}

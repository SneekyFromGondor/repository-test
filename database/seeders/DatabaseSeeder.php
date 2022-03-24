<?php

namespace Database\Seeders;

use App\Models\Raza;
use App\Models\Viaje;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UserSeeder::class);
        /*Raza::factory(6)->create();
        Viaje::factory(30)->create();*/
    }
}

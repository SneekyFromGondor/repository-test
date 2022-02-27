<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Luciano Moreno',
            'email' => 'luchi@gmail.com',
            'password' => bcrypt('qwer1234')

        ]);

        User::factory(10)->create();
    }
}

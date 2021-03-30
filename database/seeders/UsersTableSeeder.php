<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $password = bcrypt('secret');

        User::create([
            'name'     => 'datikken',
            'email'    => 'tikken23@gmail.com',
            'password' => Hash::make('23tikken'),
        ]);

        User::create([
            'name'     => $faker->name,
            'email'    => 'graphql@test.com',
            'password' => $password,
        ]);

        User::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\User;
use Illuminate\Database\Seeder;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        User::all()->each(function ($user) use ($faker) {
            foreach (range(1, 5) as $i) {
                Board::create([
                    'title' => $faker->title,
                    'color'   => $faker->hexColor,
                    'owner_id' => $user->id
                ]);
            }
        });
    }
}

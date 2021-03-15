<?php

namespace Database\Seeders;

use App\Models\CardList;
use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 3; $i++) {
            Card::create([
                'title' => 'Grocieries', 'content' => $faker->sentence, 'list_id' => $i, 'owner_id' => 1
            ]);
        }
    }
}

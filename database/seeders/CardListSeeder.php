<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\CardList;
use Illuminate\Database\Seeder;

class CardListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            CardList::create([
                'title' => 'Grocieries', 'board_id' => $i
            ]);
        }
    }
}

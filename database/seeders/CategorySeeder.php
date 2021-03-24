<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       return Category::create([
            'name' => 'algorithms',
            'description' => 'Everything you need to know'
        ]);
    }
}

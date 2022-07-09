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
        Category::create(['name' => 'new products']);
        Category::create(['name' => 'vintage']);
        Category::create(['name' => 'cheap price']);
        Category::create(['name' => 'good quality']);
        Category::create(['name' => 'trendy']);
    }
}

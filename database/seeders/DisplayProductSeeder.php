<?php

namespace Database\Seeders;

use App\Models\DisplayProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DisplayProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all()->random(9);
        $products->each(function (Product $product) {
            $product->displayProduct()->create(DisplayProduct::factory()->make()->toArray());
        });
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\Image;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(10)->create();
        $products->each(function (Product $product) {
            $product->images()->insert(Image::factory(3)->make(['product_id' => $product->id])->toArray());
        });
    }
}

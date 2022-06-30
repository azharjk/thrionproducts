<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\Image;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(5)->create();
        $products->each(function (Product $product) {
            $product->images()->insert(Image::factory(3)->make(['product_id' => $product->id])->toArray());
            $product->order()->create(Order::factory()->make()->toArray());
        });
    }
}

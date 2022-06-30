<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;
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
        $products = Product::all()->random(5);
        $products->each(function (Product $product) {
            $product->order()->create(Order::factory()->make(['product_id' => $product->id])->toArray());
        });
    }
}

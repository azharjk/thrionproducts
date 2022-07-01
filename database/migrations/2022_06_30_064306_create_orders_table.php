<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Product;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class);
            $table->string('customer_name');
            $table->string('whatsapp_number');
            $table->text('address');
            $table->enum('status', ['NEW', 'SHIPPED', 'DELIVERED', 'CANCELLED']);
            $table->enum('payment_method', ['COD', 'TRANSFER']);
            $table->decimal('total_price', 10);
            $table->string('total_price_html')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

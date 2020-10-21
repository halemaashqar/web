<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_Products', function (Blueprint $table) {
            $table->unsignedBigInteger('ID');
            $table->timestamps();
            $table->integer('Qty');
            $table->decimal('PriceEach',19,0);
            $table->unsignedBigInteger('OrderID')->nullable();
            $table->unsignedBigInteger('ProductCode')->nullable();


            $table->foreign('OrderID')->references('ID')->on('orders');
            $table->foreign('ProductCode')->references('Code')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}

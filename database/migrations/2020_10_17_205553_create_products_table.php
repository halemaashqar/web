<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('ProductLineID')->nullable();
            $table->unsignedBigInteger('code');
            $table->string('Name');
            $table->integer('Scale');
            $table->string('vendor');
            $table->string('PdtDescription');
            $table->integer('QtyInStock');
            $table->decimal('BuyPrice',19,0);
            $table->string('MSRP');



            $table->foreign('ProductLineID')->references('ID')->on('product_lines');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->timestamps();

            $table->unsignedBigInteger('ID');
            $table->string('OtderData');
            $table->string('RequiredDate');
            $table->string('ShippedDate');
            $table->integer('Status');

            $table->string('comments');
            $table->unsignedBigInteger('CustomerID')->nullable();

            $table->foreign('CustomerID')->references('ID')->on('customers');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emmployees', function (Blueprint $table) {
            $table->unsignedBigInteger('ID');
            $table->timestamps();
            $table->integer('reportsTo');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Extension');
            $table->string('Email');
            $table->string('JobTitle',100);
            $table->unsignedBigInteger('OfficeCode')->nullable();




            $table->foreign('OfficeCode')->references('code')->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emmployees');
    }
}

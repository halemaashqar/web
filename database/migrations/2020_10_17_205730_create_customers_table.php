<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('OfficeCode')->nullable();
            $table->unsignedBigInteger('ID');
            $table->timestamps();
            $table->string('Name');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Phone');
            $table->string('Address1');
            $table->string('Address2');
            $table->string('State');
            $table->string('City');
            $table->integer('PostalCode');
            $table->string('Country');
            $table->decimal('CreaditLimit',19,0);
            $table->unsignedBigInteger('salesRepEmployeeNum')->nullable();





            $table->foreign('salesRepEmployeeNum')->references('ID')->on('emmployees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

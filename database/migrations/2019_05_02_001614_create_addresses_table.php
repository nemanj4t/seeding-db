<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('property_owner_id');
            $table->integer('line_1_number_building');
            $table->integer('line_2_number_street');
            $table->integer('line_3_number_locality');
            $table->string('city');
            $table->string('zip_postcode');
            $table->string('state_province_county');
            $table->string('country');
            $table->foreign('property_owner_id')->references('id')->on('property_owners')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}

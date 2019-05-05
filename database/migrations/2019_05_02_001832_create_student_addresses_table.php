<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('address_type_code');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('address_id');
            $table->date('date_address_from');
            $table->date('date_address_to');
            $table->integer('monthly_rental');
            $table->foreign('student_id')->references('id')->on('students')
                ->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')
                ->onDelete('cascade');
            $table->foreign('address_type_code')->references('address_type_code')->on('ref_address_types')
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
        Schema::dropIfExists('student_addresses');
    }
}

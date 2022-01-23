<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            
            $table->string('employee_name');

            $table->bigInteger('nid_number');
            $table->string('email')->unique();

            $table->integer('phone_number');
            $table->string('gender');
            $table->string('city');
            $table->string('country');


            $table->string('address');


            $table->string('working_field');

            $table->string('status')->default('available');


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
        Schema::dropIfExists('employees');
    }
}

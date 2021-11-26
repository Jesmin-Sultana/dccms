<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('nid_number');
            $table->string('name');
            $table->integer('phone_number');
            $table->string('gender');
            $table->string('address');
            $table->string('problem_type');
            $table->string('application_type');
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
        Schema::dropIfExists('user_tables');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserfeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userfeedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->integer('user_nid');
            $table->string('problem_type');
            $table->string('area');
            $table->string('feedback');
            $table->string('image');



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
        Schema::dropIfExists('userfeedbacks');
    }
}

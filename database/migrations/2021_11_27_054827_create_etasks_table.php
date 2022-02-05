<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etasks', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->bigInteger('nid_number');
            $table->string('problem_area');
            $table->string('work_type');
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
        Schema::dropIfExists('etasks');
    }
}

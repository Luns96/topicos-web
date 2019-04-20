<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('time');
            $table->string('name')->nullable();
            $table->string('ocupation')->nullable();
            $table->bigInteger('section_id')->unsigned();
            // $table->foreign('section_id')->references('id')->on('sections');

            $table->bigInteger('personal_id')->unsigned();
            // $table->foreign('personal_id')->references('id')->on('personals');

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
        Schema::dropIfExists('schedules');
    }
}

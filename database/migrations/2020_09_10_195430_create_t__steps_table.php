<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t__steps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('m__users_id');
            $table->foreign('m__users_id')->references('id')->on('m__users')->onDelete('cascade');
            $table->dateTime('step_actual_datetime', 0);
            $table->dateTime('step_calc_datetime', 0);
            $table->bigInteger('steps');
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
        Schema::dropIfExists('t__steps');
    }
}

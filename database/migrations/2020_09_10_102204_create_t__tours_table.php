<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t__tours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('m__users_id');
            $table->foreign('m__users_id')->references('id')->on('m__users')->onDelete('cascade');
            $table->unsignedBigInteger('m__tours_id');
            $table->foreign('m__tours_id')->references('id')->on('m__tours')->onDelete('cascade');
            $table->dateTime('start_datetime', 0);
            $table->dateTime('end_datetime', 0);
            $table->dateTime('cancellation_datetime', 0);
            $table->enum('status', ['Inprogress', 'Cancel', 'Done']);
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
        Schema::dropIfExists('t__tours');
    }
}

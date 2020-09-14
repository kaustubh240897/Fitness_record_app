<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t__logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('m__users_id');
            $table->foreign('m__users_id')->references('id')->on('m__users')->onDelete('cascade');
            $table->dateTime('access_datetime', 0);
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
        Schema::dropIfExists('t__logs');
    }
}

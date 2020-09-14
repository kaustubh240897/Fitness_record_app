<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t__collections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('m__users_id');
            $table->foreign('m__users_id')->references('id')->on('m__users')->onDelete('cascade');
            $table->unsignedBigInteger('m__collections_id');
            $table->foreign('m__collections_id')->references('id')->on('m__collections')->onDelete('cascade');
            $table->boolean('new_display_flag')->default(0);
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
        Schema::dropIfExists('t__collections');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m__collections', function (Blueprint $table) {
            $table->id();
            $table->enum('collection_category', ['tour', 'checkpoint']);
            $table->string('collection_title', 255);
            $table->string('path');
            $table->string('filename',255);
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
        Schema::dropIfExists('m__collections');
    }
}

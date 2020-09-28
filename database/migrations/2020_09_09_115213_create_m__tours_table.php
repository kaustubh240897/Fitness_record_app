<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m__tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_title', 255);
            $table->string('tour_comment', 255);
            $table->foreignId('m__collection_id')
            ->constrained('m__collections')
            ->onDelete('cascade');
            $table->smallInteger('tour_level')->default(1);
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
        Schema::dropIfExists('m__tours');
        Schema::enableForeignKeyConstraints();
    }
}

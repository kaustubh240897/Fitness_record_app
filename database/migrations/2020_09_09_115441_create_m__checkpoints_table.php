<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCheckpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m__checkpoints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('m__tour_id')
            ->constrained('m__tours')
            ->onDelete('cascade');
            $table->string('checkpoint_title', 255);
            $table->enum('checkpoint_category', ['start', 'intermediate', 'spot', 'endpoint']);
            $table->integer('distance');
            $table->string('comments', 255);
            $table->string('prefectures', 255);
            $table->foreignId('m__collection_id')
            ->constrained('m__collections')
            ->onDelete('cascade');
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
        Schema::dropIfExists('m__checkpoints');
        Schema::enableForeignKeyConstraints();
    }
}

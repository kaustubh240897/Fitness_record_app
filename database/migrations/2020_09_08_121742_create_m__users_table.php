<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m__users', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number', 255)->unique();
            $table->smallInteger('stride');
            $table->integer('step_goal_per_day');
            $table->integer('step_goals_per_month');
            $table->smallInteger('tour_level');
            $table->boolean('motion_app')->default(0);
            $table->boolean('motion_web')->default(0);
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
        Schema::dropIfExists('m__users');
    }
}

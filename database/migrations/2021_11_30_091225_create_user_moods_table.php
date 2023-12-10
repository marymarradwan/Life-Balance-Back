<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_moods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('moods_id')->constrained('moods')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->text('note')->nullable();
            $table->date('date')->nullable();
            $table->integer('dayDate')->nullable();
            $table->integer('monthDate')->nullable();
            $table->integer('yearDate')->nullable();
            $table->integer('hoursDate')->nullable();
            $table->integer('minutesDate')->nullable();
            $table->integer('secondsDate')->nullable();
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
        Schema::dropIfExists('user_moods');
    }
}

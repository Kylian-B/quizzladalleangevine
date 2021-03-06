<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizz', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('correct');
            $table->string('false1');
            $table->string('false2');
            $table->string('false3');
            $table->varchar('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizz');
    }
}
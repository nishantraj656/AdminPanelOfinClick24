<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
           
            $table->bigIncrements('questionID');
            $table->string('question');
            $table->string('option');
            $table->string('answer')->nullable();
			$table->string('Discription')->nullable();
			$table->integer('subject');
			$table->integer('topic');
			$table->string('level');
			$table->string('type');

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
        Schema::dropIfExists('questions');
    }
}

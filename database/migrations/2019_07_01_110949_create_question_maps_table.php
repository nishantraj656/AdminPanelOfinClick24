<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_maps', function (Blueprint $table) {
            $table->bigIncrements('questionMapID');
            $table->integer('questionID');
            $table->integer('topicID');
            $table->integer('sectionID');
            $table->integer('examID');
            $table->integer('groupID');
            $table->integer('testID');
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
        Schema::dropIfExists('question_maps');
    }
}

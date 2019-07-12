<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_infos', function (Blueprint $table) {
            $table->bigIncrements('ProductInfoID');
            $table->integer('groupID')->nullable();
            $table->string('productName')->nullable();
            $table->integer('testID')->nullable();
            $table->integer('sectionID')->nullable();
            $table->integer('topicID')->nullable();
            $table->integer('examID')->nullable();
            $table->string('description')->nullable();
            $table->integer('subjectID')->nullable();
            $table->string('pic')->nullable();
            $table->string('price')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('product_infos');
    }
}

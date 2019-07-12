<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAllowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_allows', function (Blueprint $table) {
            $table->bigIncrements('productAllowID');
            $table->integer('userID');
            $table->string('status')->default(1);
            $table->string('answerFilePath')->nullable();
            $table->string('accessibility')->nullable();
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
        Schema::dropIfExists('product_allows');
    }
}

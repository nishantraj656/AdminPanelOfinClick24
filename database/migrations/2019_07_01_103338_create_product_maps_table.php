<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_maps', function (Blueprint $table) {
            $table->bigIncrements('productMapID');
            $table->integer('productInfoID');
            $table->integer('price');
            $table->date('expiredate');
            $table->string('status')->default(1);
            $table->string('QuestionMapID');
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
        Schema::dropIfExists('product_maps');
    }
}

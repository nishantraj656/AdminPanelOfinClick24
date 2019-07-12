<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotionals', function (Blueprint $table) {
            $table->bigIncrements('PromotionalID');
            $table->string('PromotionalCode');
            $table->integer('discount');
            $table->date('expDate');
            $table->integer('usedTimes');
            $table->string("allowTo")->nullable();
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
        Schema::dropIfExists('promotionals');
    }
}

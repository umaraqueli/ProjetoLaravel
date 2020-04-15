<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hotel_id')->index();
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->integer('capacidade');
            $table->integer('valor');
            $table->tinyInteger('disponivel');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by'); 
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
        Schema::dropIfExists('quartos');
    }
}

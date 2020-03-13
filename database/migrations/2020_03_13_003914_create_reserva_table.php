<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pessoa_id')->index();
            $table->unsignedBigInteger('quarto_id')->index();
            $table->foreign('pessoa_id')->references('id')->on('pessoa');
            $table->foreign('quarto_id')->references('id')->on('quarto');
            $table->date('data_reserva');
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
        Schema::dropIfExists('reserva');
    }
}

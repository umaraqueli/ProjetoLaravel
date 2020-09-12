<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pessoa_id')->index();
            $table->unsignedBigInteger('quarto_id')->index();
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('quarto_id')->references('id')->on('quartos');
            $table->date('data_reserva');
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->foreign('user_id')->references('id')->on('users'); 
            //$table->unsignedBigInteger('created_by');
            //$table->unsignedBigInteger('updated_by'); 
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
        Schema::dropIfExists('reservas');
    }
}

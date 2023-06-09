<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();    //->increment(false);
           // $table->string('placa');
           // $table->string('modelo');
            //$table->string('soat');
            //$table->string('cilindraje');
            //$table->timestamps();

            $table->unsignedBigInteger('id_vehiculos')->nullable();
            $table->foreign('id_vehiculos')->references('id')->on('registro_vehiculos')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroVehiculosTable extends Migration
{

    public function up()
    {
        Schema::create('registro_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('placa');
            $table->string('modelo');
            $table->string('soat');
            $table->string('cilindraje');


            // $table->unsignedBigInteger('placa_vehiculo')->nullable();
             //$table->foreign('placa_vehiculo')->references('id')->on('vehiculos')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('registro_vehiculos');
    }
}

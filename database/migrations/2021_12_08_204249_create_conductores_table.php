<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->id();
            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono',10);
            $table->string('direccion');
            $table->string('correo');
            $table->string('password');

             $table->unsignedBigInteger('id_vehiculo')->nullable();
             $table->foreign('id_vehiculo')->references('id')->on('vehiculos')->onUpdate('cascade')->onDelete('cascade');

             $table->unsignedBigInteger('id_transporte')->nullable();
             $table->foreign('id_transporte')->references('id')->on('transportes')->onUpdate('cascade')->onDelete('cascade');

             $table->unsignedBigInteger('id_ruta')->nullable();
             $table->foreign('id_ruta')->references('id')->on('rutas')->onUpdate('cascade')->onDelete('cascade');


            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('conductores');
    }
}

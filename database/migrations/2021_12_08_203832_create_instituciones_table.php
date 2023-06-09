<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id();
            $table->string('nit')->nullable();
            $table->string('nombre')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('correo')->nullable();
            $table->string('password')->nullable();

            // $table->unsignedBigInteger('id_transporte')->nullable();
            // $table->foreign('id_transporte')->references('id')->on('transportes')->onUpdate('cascade')->onDelete('cascade');



            // $table->unsignedBigInteger('id_pagoEstudiante')->nullable();
             //$table->foreign('id_pagoEstudiante')->references('id')->on('estudiantes')->onUpdate('cascade')->onDelete('cascade');

            // $table->unsignedBigInteger('cedula_conductores')->nullable();
            // $table->foreign('cedula_conductores')->references('id')->on('conductores')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('instituciones');
    }
}

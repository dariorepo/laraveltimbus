<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion');
            $table->string('nombre')->nullable();
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo');
            $table->string('institucion')->nullable();
            $table->string('password')->nullable();

           $table->unsignedBigInteger('id_institucion')->nullable();
           $table->foreign('id_institucion')->references('id')->on('instituciones')->onUpdate('cascade')->onDelete('cascade');


           $table->unsignedBigInteger('id_estudiante')->nullable();
           $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('pago_estudiantes');
    }
}

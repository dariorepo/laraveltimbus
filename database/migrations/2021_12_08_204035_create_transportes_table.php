<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportesTable extends Migration
{

    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->string('nit');
            $table->string('nombre');
            $table->string('telefono',10);
            $table->string('direccion');
            $table->string('correo');
            $table->string('imagenT')->nullable();
            $table->string('password')->nullable();

            $table->unsignedBigInteger('id_ruta')->nullable();
            $table->foreign('id_ruta')->references('id')->on('rutas')->onUpdate('cascade')->onDelete('cascade');


             //  $table->unsignedBigInteger('id_inscripcionTransporte')->nullable();
             // $table->foreign('id_inscripcionTransporte')->references('id')->on('inscripcion_transportes')->onUpdate('cascade')->onDelete('cascade');


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
        Schema::dropIfExists('transportes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_transportes', function (Blueprint $table) {
            $table->id();
            // $table->string('identificacion');
            // $table->string('nombre_estudiante');
             //$table->string('apellido_estudiante');
             //$table->string('telefono_estudiante',10);
             //$table->string('direccion_estudiante');
             $table->string('institucion');


               //$table->unsignedBigInteger('id_identificacion')->nullable();
              // $table->foreign('id_identificacion')->references('id')->on('estudiantes')->onUpdate('cascade')->onDelete('cascade');

               $table->unsignedBigInteger('id_institucion')->nullable();
              $table->foreign('id_institucion')->references('id')->on('instituciones')->onUpdate('cascade')->onDelete('cascade');

               $table->unsignedBigInteger('id_transporte')->nullable();
               $table->foreign('id_transporte')->references('id')->on('transportes')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('inscripcion_transportes');
    }
}

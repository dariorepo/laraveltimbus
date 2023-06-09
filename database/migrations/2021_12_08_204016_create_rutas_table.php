<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('horario');
            $table->string('imagen')->nullable();
            $table->timestamps();

            // $table->unsignedBigInteger('id_transporte')->nullable();
            // $table->foreign('id_transporte')->references('id')->on('transportes')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('rutas');
    }
}

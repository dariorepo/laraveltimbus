<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{

    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('nit');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono',10);
            $table->string('correo');
            // $table->string('id_ruta')->nullable();
            $table->string('imagenT');


            //datos de ruta
            $table->string('descripcion');
            $table->string('precio');
            $table->string('horario');
            $table->string('imagen');

            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('carts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('celular',10);
            $table->string('correo');
            $table->string('password');

           //$table->unsignedBigInteger('id_institucion')->nullable();
           //$table->foreign('id_institucion')->references('id')->on('instituciones')->onUpdate('cascade')->onDelete('cascade');



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
        Schema::dropIfExists('estudiantes');
    }
}

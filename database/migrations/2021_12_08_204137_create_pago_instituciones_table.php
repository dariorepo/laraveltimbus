<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoInstitucionesTable extends Migration
{

    public function up()
    {
        Schema::create('pago_instituciones', function (Blueprint $table) {
            $table->id();
            // $table->string('pago');
            $table->string('nombre_institucion');
            $table->string('telefono',10);
            $table->string('correo');
            $table->string('medio_pago');
            $table->string('monto',10)->nullable();


            $table->unsignedBigInteger('id_transporte')->nullable();
            $table->foreign('id_transporte')->references('id')->on('transportes')->onUpdate('cascade')->onDelete('cascade');

             $table->timestamp('email_verified_at')->nullable();
             $table->rememberToken();
             $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('pago_instituciones');
    }
}

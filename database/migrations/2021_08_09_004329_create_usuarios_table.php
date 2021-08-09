<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigInteger('idusuario')->unsigned()->autoIncrement();
            $table->string('nombreusuario');
            $table->string('apellidousuario');
            $table->foreignId('id_tipodocumento');
            $table->double('documentousuario');
            $table->string('correousuario');
            $table->double('telefonousuario');
            $table->foreignId('id_rol');
            $table->foreignId('id_genero');
            $table->foreignId('id_paciente');
            $table->foreignId('id_doctor');
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
        Schema::dropIfExists('usuarios');
    }
}

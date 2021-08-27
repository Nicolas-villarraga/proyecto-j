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
            $table->id();
            $table->string('usuario');
            $table->string('contraseña');
            $table->bigInteger('id_Paciente')->unsigned()->nullable();
            $table->foreign('id_Paciente')->references('id')->on('pacientes');
            $table->bigInteger('id_Estado')->unsigned()->nullable();
            $table->foreign('id_Estado')->references('id')->on('estados');
            $table->bigInteger('id_Genero')->unsigned()->nullable();
            $table->foreign('id_Genero')->references('id')->on('generos');
            $table->bigInteger('id_Tipodocumento')->unsigned()->nullable();
            $table->foreign('id_Tipodocumento')->references('id')->on('tipodocumentos');
            $table->bigInteger('id_Doctor')->unsigned()->nullable();
            $table->foreign('id_Doctor')->references('id')->on('doctors');
            $table->bigInteger('id_Rol')->unsigned()->nullable();
            $table->foreign('id_Rol')->references('id')->on('rols');
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

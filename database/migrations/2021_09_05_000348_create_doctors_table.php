<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('nombredoctor',45);
            $table->string('apellidodoctor',45);
            $table->bigInteger('id_Especialidad')->unsigned();
            $table->foreign('id_Especialidad')->references('id')->on('especialidads');
            $table->bigInteger('id_Tipodocumento')->unsigned();
            $table->foreign('id_Tipodocumento')->references('id')->on('tipodocumentos');
            $table->string('documentodoctor',45);
            $table->string('correodoctor',75);
            $table->string('contraseña',45);
            $table->bigInteger('id_Genero')->unsigned();
            $table->foreign('id_Genero')->references('id')->on('generos');
            $table->bigInteger('id_rol')->unsigned();
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
        Schema::dropIfExists('doctors');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombrepaciente');
            $table->string('apellidopaciente');
            $table->bigInteger('id_Tipodocumento')->unsigned()->nullable();
            $table->foreign('id_Tipodocumento')->references('id')->on('tipodocumentos');
            $table->string('documentopaciente');
            $table->string('correopaciente');
            $table->string('telefonopaciente');
            $table->string('acudientepaciente');
            $table->bigInteger('id_estado')->unsigned()->nullable();
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->bigInteger('id_Genero')->unsigned()->nullable();
            $table->foreign('id_Genero')->references('id')->on('generos');
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
        Schema::dropIfExists('pacientes');
    }
}

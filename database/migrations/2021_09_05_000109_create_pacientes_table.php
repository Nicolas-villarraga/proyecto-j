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
            $table->string('nombrepaciente',45);
            $table->string('apellidopaciente',45);
            $table->bigInteger('id_Tipodocumento')->unsigned();
            $table->foreign('id_Tipodocumento')->references('id')->on('tipodocumentos');
            $table->string('documentopaciente',45);
            $table->string('correopaciente',75);
            $table->string('telefonopaciente',45);
            $table->string('acudientepaciente',75);
            $table->string('contraseña');
            $table->bigInteger('id_Estado')->unsigned();
            $table->foreign('id_Estado')->references('id')->on('estados');
            $table->bigInteger('id_Genero')->unsigned();
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

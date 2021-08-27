<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('nombredoctor');
            $table->string('apellidodoctor');
            $table->bigInteger('id_Especialidad')->unsigned()->nullable();
            $table->foreign('id_Especialidad')->references('id')->on('especialidads');
            $table->bigInteger('id_Tipodocumento')->unsigned()->nullable();
            $table->foreign('id_Tipodocumento')->references('id')->on('tipodocumentos');
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
        Schema::dropIfExists('doctors');
    }
}

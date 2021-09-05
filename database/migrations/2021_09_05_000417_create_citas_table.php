<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('fechayhora');
            $table->bigInteger('id_Especialidad')->unsigned();
            $table->foreign('id_Especialidad')->references('id')->on('especialidads');
            $table->bigInteger('id_Doctor')->unsigned();
            $table->foreign('id_Doctor')->references('id')->on('doctors');
            $table->bigInteger('id_Paciente')->unsigned();
            $table->foreign('id_Paciente')->references('id')->on('pacientes');
            $table->bigInteger('id_Estado')->unsigned();
            $table->foreign('id_Estado')->references('id')->on('estados');
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
        Schema::dropIfExists('citas');
    }
}

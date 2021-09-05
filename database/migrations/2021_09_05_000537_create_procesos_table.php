<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->string('fechaproceso');
            $table->string('observacionesdeproceso');
            $table->bigInteger('id_Doctor')->unsigned();
            $table->foreign('id_Doctor')->references('id')->on('doctors');
            $table->bigInteger('id_Historiaclinica')->unsigned();
            $table->foreign('id_Historiaclinica')->references('id')->on('historiaclinicas');
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
        Schema::dropIfExists('procesos');
    }
}

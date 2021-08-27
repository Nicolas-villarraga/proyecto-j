<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriaclinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiaclinicas', function (Blueprint $table) {
            $table->id();
            $table->string('fechacreacionhistoria');
            $table->string('descripcionhistoriaclinica');
            $table->bigInteger('id_Doctor')->unsigned()->nullable();
            $table->foreign('id_Doctor')->references('id')->on('doctors');
            $table->bigInteger('id_Paciente')->unsigned()->nullable();
            $table->foreign('id_Paciente')->references('id')->on('pacientes');
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
        Schema::dropIfExists('historiaclinicas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

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
            $table->bigInteger('idcita')->unsigned()->autoIncrement();
            $table->string('especialidad');
            $table->foreignId('id_doctor');
            $table->dateTime('fechayhora');
            $table->foreignId('id_paciente');
            $table->foreignId('id_estado');
            $table->foreignId('id_historiaclinica');
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

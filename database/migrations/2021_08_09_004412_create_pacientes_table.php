<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

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
            $table->bigInteger('idpaciente')->unsigned()->autoIncrement();
            $table->string('nombrepaciente');
            $table->string('apellidopaciente');
            $table->foreignId('id_tipodocumento');
            $table->double('documentopaciente');
            $table->string('correopaciente');
            $table->double('telefonopaciente');
            $table->foreignId('id_estado');
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

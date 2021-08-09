<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcudientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acudientes', function (Blueprint $table) {
            $table->bigInteger('idacudiente')->unsigned()->autoIncrement();
            $table->string('nombreacudiente');
            $table->foreignId('id_tipodedocumento');
            $table->double('documentoacudiente');
            $table->string('parentescoacudiente');
            $table->double('telefonoacudiente');
            $table->foreignId('id_paciente');
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
        Schema::dropIfExists('acudientes');
    }
}

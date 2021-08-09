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
            $table->bigInteger('idhistoriaclinica')->unsigned()->autoIncrement();
            $table->time('fechacreacionhistoriaclinica');
            $table->longText('descripcionhistoriaclinica');
            $table->foreignId('id_doctor');
            $table->foreignId('id_paciente');
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

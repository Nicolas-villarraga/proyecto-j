<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigInteger('idpedido')->unsigned()->autoIncrement();
            $table->date('fechapedido');
            $table->time('horapedido');
            $table->double('totalpedido');
            $table->longText('observacionpedido');
            $table->foreignId('id_paciente');
            $table->foreignId('id_estado');
            $table->foreignId('id_doctor');
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
        Schema::dropIfExists('pedidos');
    }
}

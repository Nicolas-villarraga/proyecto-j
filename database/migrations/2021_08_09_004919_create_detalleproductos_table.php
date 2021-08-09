<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleproductos', function (Blueprint $table) {
            $table->bigInteger('iddetalle')->unsigned()->autoIncrement();
            $table->string('nombredetallepedido');
            $table->longText('descripciondetallepedido');
            $table->double('cantidadproducto');
            $table->double('valordetalleproducto');
            $table->foreignId('id_pedido');
            $table->foreignId('id_paciente');
            $table->foreignId('id_estado');
            $table->foreignId('id_producto');
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
        Schema::dropIfExists('detalleproductos');
    }
}

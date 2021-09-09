<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_Producto')->references('id')->on('productos');
            $table->bigInteger('id_Pedido')->unsigned();
            $table->string('descripcionproducto');
            $table->string('cantidadproducto');
            $table->string('valorproducto');
            $table->bigInteger('id_Producto')->unsigned();
            $table->foreign('id_Pedido')->references('id')->on('pedidos');
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
        Schema::dropIfExists('detalles');
    }
}

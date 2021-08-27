<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

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
            $table->id();
            $table->string('nombreproducto');
            $table->string('descripcionproducto');
            $table->string('cantidadproducto');
            $table->string('valorproducto');
            $table->bigInteger('id_Pedido')->unsigned()->nullable();
            $table->foreign('id_Pedido')->references('id')->on('pedidos');
            $table->bigInteger('id_Paciente')->unsigned()->nullable();
            $table->foreign('id_Paciente')->references('id')->on('pacientes');
            $table->bigInteger('id_Estado')->unsigned()->nullable();
            $table->foreign('id_Estado')->references('id')->on('estados');
            $table->bigInteger('id_Producto')->unsigned()->nullable();
            $table->foreign('id_Producto')->references('id')->on('productos');
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

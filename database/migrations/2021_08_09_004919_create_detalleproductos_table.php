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
            $table->string('descripciondetallepedido');
            $table->double('cantidadproducto');
            $table->double('valordetalleproducto');
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

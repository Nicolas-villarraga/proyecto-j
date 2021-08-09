<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->bigInteger('idproveedor')->unsigned()->autoIncrement();
            $table->foreignId('id_nitproveedor');
            $table->ipAddress('direccionproveedor');
            $table->double('telefonoproveedor');
            $table->string('correoproveedor');
            $table->string('marcaproveedor');
            $table->string('nombreproveedor');
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
        Schema::dropIfExists('proveedors');
    }
}

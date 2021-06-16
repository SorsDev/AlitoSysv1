<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_pagos', function (Blueprint $table) {
            $table->id();

            $table->string('descripcion',150)->nullable();
            $table->dateTime('fecha_pago')->nullable();
            $table->string('sustento_abono_ruta')->nullable();
            $table->string('sustento_abono_nombre')->nullable();
            $table->string('sustento_recepcion_ruta')->nullable();
            $table->string('sustento_repcion_nombre')->nullable();

            $table->unsignedBigInteger('idpedido');
            $table->foreign('idpedido')->references('id')->on('pedidos');

            $table->unsignedBigInteger('identidad');
            $table->foreign('identidad')->references('id')->on('entidad_bancarias');


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
        Schema::dropIfExists('pedido_pagos');
    }
}

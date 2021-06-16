<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_transportes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idpedido');
            $table->foreign('idpedido')->references('id')->on('pedidos');

            $table->unsignedBigInteger('idtransporte');
            $table->foreign('idtransporte')->references('id')->on('transportes');

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
        Schema::dropIfExists('pedido_transportes');
    }
}

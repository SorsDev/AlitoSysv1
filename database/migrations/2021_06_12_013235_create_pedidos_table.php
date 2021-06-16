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
            $table->id();

            $table->string('canaldeventa')->nullable();
            $table->string('concepto')->nullable();
            $table->date('fecha_pedido');
            $table->text('observaciones')->nullable();
            $table->string('distrito');
            $table->string('direccion_envio');
            $table->decimal('precio_envio_distrito',10,2);
            $table->decimal('precio_final',10,2);
            $table->integer('estado_pedido');
            $table->integer('nro_orden_compra');

            $table->unsignedBigInteger('idcliente');
            $table->foreign('idcliente')->references('id')->on('clientes');

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

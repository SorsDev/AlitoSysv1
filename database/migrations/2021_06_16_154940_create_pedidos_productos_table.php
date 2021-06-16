<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_productos', function (Blueprint $table) {
            $table->id();

            $table->decimal('precio',10,2);
            $table->string('descuento_porcentaje')->nullable();
            $table->string('cantidad_descuento')->nullable();
            $table->decimal('precio_descuento',10,2);
            $table->decimal('precio_extraordinario',10,2);
            $table->text('observaciones')->nullable();

            $table->unsignedBigInteger('idpedido');
            $table->foreign('idpedido')->references('id')->on('pedidos');

            $table->unsignedBigInteger('idproducto');
            $table->foreign('idproducto')->references('id')->on('productos');

            $table->unsignedBigInteger('idestadoproducto');
            $table->foreign('idestadoproducto')->references('id')->on('estado_productos');


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
        Schema::dropIfExists('pedidos_productos');
    }
}

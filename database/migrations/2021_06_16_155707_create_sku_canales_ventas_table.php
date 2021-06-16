<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkuCanalesVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sku_canales_ventas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('sku');

            $table->unsignedBigInteger('idproducto');
            $table->foreign('idproducto')->references('id')->on('productos');

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
        Schema::dropIfExists('sku_canales_ventas');
    }
}

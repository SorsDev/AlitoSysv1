<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('sku');
            $table->string('nombre');
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->decimal('precio_referencial',10,2)->nullable();

            $table->unsignedBigInteger('idlinea');
            $table->foreign('idlinea')->references('id')->on('lineas');

            $table->unsignedBigInteger('idgenero');
            $table->foreign('idgenero')->references('id')->on('generos');

            $table->unsignedBigInteger('idcategoria');
            $table->foreign('idcategoria')->references('id')->on('pedidos');

            $table->unsignedBigInteger('idtalla');
            $table->foreign('idtalla')->references('id')->on('tallas');

            $table->unsignedBigInteger('idcolor');
            $table->foreign('idcolor')->references('id')->on('colors');

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
        Schema::dropIfExists('productos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_productos', function (Blueprint $table) {
            $table->id();

            $table->integer('cantidad');
            $table->string('unidad');

            $table->unsignedBigInteger('idinventario');
            $table->foreign('idinventario')->references('id')->on('inventarios');

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
        Schema::dropIfExists('inventario_productos');
    }
}

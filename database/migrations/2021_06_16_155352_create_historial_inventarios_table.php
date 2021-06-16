<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_inventarios', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->string('sucursal_inicio');
            $table->string('sucursal_destino');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->string('unidad');

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
        Schema::dropIfExists('historial_inventarios');
    }
}

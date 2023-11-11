<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCarritoTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_carrito', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrito_id');
            $table->foreign('carrito_id')->references('id')->on('carritos');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_carrito');
    }
}

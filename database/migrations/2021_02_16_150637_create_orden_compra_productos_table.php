<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenCompraProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_compra_producto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('orden_compra_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->integer('renglon');
            $table->string('codigo');
            $table->integer('empaque');
            $table->integer('bulto');
            $table->integer('cantidad');
            $table->double('peso_total');
            $table->double('monto');

            $table->foreign('orden_compra_id')
                ->references('id')
                ->on('orden_compra');

            $table->foreign('producto_id')
                ->references('id')
                ->on('productos');

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
        Schema::dropIfExists('orden_compra_productos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_compra', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_proveedor')->nullable();
            $table->unsignedBigInteger('codigo_3jm')->nullable();
            $table->string('orden');
            $table->date('fecha_salida');

            $table->foreign('id_proveedor')
                ->references('id')
                ->on('proveedores');

            $table->foreign('codigo_3jm')
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
        Schema::dropIfExists('orden_compra');
    }
}

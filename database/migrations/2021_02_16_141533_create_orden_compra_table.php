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

            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_codigo');
            $table->string('orden');
            $table->integer('renglon');
            $table->string('codigo_3jm');
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('unid_medida');
            $table->integer('empaque');
            $table->integer('bulto');
            $table->integer('cantidad');
            $table->double('peso_unit');
            $table->double('peso_total');
            $table->double('precio_unit');
            $table->double('monto');
            $table->date('fecha_salida');

            $table->foreign('id_proveedor')
                ->references('id')
                ->on('proveedores');

            $table->foreign('id_codigo')
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

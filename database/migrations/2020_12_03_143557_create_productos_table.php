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

            $table->string('codigo')->unique()->nullable();
            $table->string('descripcion')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->unsignedBigInteger('id_proveedor')->nullable();
            $table->unsignedBigInteger('id_unidades')->nullable();
            $table->double('inventario_inicial')->nullable(); 
            $table->date('fecha_ingreso')->nullable();
            $table->double('peso_unitario')->nullable();
            $table->double('cantidad')->nullable();
            $table->double('peso_total')->nullable();
            $table->string('ubicacion')->nullable();
            $table->double('ipc')->nullable(); 
            $table->double('precio_unit')->nullable(); 
            $table->double('flete_precio')->nullable(); 
            $table->double('stock_max')->nullable();
            $table->double('stock_min')->nullable();
            $table->string('producto_critico')->nullable();
            $table->double('cantidad_pedir')->nullable();
            $table->string('ajuste_inventario')->nullable();
            $table->string('ubicacion_geografica')->nullable();
            $table->double('monto')->nullable();

            $table->foreign('id_categoria')
                ->references('id')
                ->on('categoria')
                ->onUpdate('cascade');

            $table->foreign('id_proveedor')
                ->references('id')
                ->on('proveedores')
                ->onUpdate('cascade');

            $table->foreign('id_unidades')
                ->references('id')
                ->on('unidades')
                ->onUpdate('cascade');

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

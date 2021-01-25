<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('categoria_id')->nullable();
            $table->string('codigo')->unique()->nullable();
            $table->string('descripcion')->nullable();
            $table->string('slug')->nullable();
            $table->double('inventario_inicial')->nullable(); 
            $table->string('unid_medida')->nullable();
            $table->double('peso_unitario')->nullable();
            $table->double('cantidad')->nullable();
            $table->double('peso_total')->nullable();
            $table->string('ubicacion')->nullable();
            $table->double('ipc')->nullable(); 
            $table->double('stock_max')->nullable();
            $table->double('stock_min')->nullable();
            $table->string('producto_critico')->nullable();
            $table->double('cantidad_pedir')->nullable();
            $table->string('ajuste_inventario')->nullable();
            $table->string('ubicacion_geografica')->nullable();
            $table->double('monto')->nullable();
            $table->double('monto_dolar')->nullable();

            $table->foreign('categoria_id')
                ->references('nombre')
                ->on('categoria')
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
        Schema::dropIfExists('products');
    }
}

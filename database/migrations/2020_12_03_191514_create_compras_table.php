<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id(); 

            $table->unsignedBigInteger('producto_id')->nullable(); 
            $table->string('codigo_proveedor')->unique()->nullable(); 
            $table->integer('back_orden')->nullable(); 
            $table->string('nro_requisicion')->nullable(); 
            $table->string('requisicion_echo')->nullable(); 
            $table->string('requisicion_seccion')->nullable(); 
            $table->string('requisicion_division')->nullable(); 
            $table->string('proveedor')->nullable(); 
            $table->string('nro_orden_compra')->nullable(); 
            $table->string('en_transito')->nullable(); 
            $table->double('entrada')->nullable(); 
            $table->date('entrada_nro_factura')->nullable(); 
            $table->string('nota_entrega')->nullable(); 
            $table->string('nro_factura')->nullable(); 
            $table->double('otros_costos')->nullable(); 
            $table->string('salida')->nullable(); 
            $table->date('salida_nro_factura')->nullable(); 
            
            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
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
        Schema::dropIfExists('compras');
    }
}

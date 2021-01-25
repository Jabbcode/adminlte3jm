<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdencomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordencompras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('proveedor_id')->nullable();
            $table->integer('orden_compra')->nullable();
            $table->integer('renglon')->nullable();
            $table->string('codigo3jm_id')->nullable();
            $table->string('codigo_proveedor')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('unid_medida')->nullable();
            $table->integer('empaque')->nullable();
            $table->double('bulto')->nullable();
            $table->double('cantidad')->nullable();
            $table->double('peso_unitario')->nullable();
            $table->double('peso')->nullable();
            $table->double('precio_unitario')->nullable();
            $table->double('monto')->nullable();
            $table->dateTime('fecha')->nullable();

            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedors')
                ->onUpdate('cascade');

            $table->foreign('codigo3jm_id')
                ->references('codigo')
                ->on('products')
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
        Schema::dropIfExists('ordencompras');
    }
}

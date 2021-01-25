<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_proveedor', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('proveedor_id');

            $table->foreign('products_id')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade');

            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedors')
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
        Schema::dropIfExists('products_proveedor');
    }
}

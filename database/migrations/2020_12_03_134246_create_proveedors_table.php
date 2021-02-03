<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();

            $table->string('rif')->nullable();
            $table->string('clasificacion_id')->nullable();
            $table->string('nombre')->nullable();
            $table->string('direccion')->nullable();
            $table->string('persona_contacto')->nullable();
            $table->string('tlf_oficina')->nullable();
            $table->string('tlf_movil')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('lugar')->nullable();
            $table->string('observaciones')->nullable();

            $table->foreign('clasificacion_id')
                ->references('nombre')
                ->on('clasificacion_proveedores')
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
        Schema::dropIfExists('proveedors');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gastos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('gastos', function (Blueprint $table) {
            $table->engine = 'InnoDB';           
            $table->id('id_gst')->autoIncrement();
            $table->string('codigo_gst')->unique();
            $table->date('fecha_gst');
            $table->float('valorTotalSinIva_gst');
            $table->float('ivaTotal_gst');
            $table->float('valorTotalConIva_gst');
            $table->string('nombreUsuario_gst');
            $table->string('lugar_gst');
            $table->string('descripcion_gst');
            $table->unsignedBigInteger('id_usr_gst')->nullable();
            $table->foreign('id_usr_gst')->references('id_usr')->on('usuarios')->onUpdate('cascade');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

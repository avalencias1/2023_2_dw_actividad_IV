<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';           
            $table->id('id_usr')->autoIncrement();
            $table->string('cc_usr')->unique();
            $table->string('pass_usr');
            $table->string('nombre_usr');
            $table->string('apellido_usr');
            $table->string('genero_usr');
            $table->string('email_usr')->unique();           
            $table->timestamps();
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

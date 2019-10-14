<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('RazonSocial');
            $table->string('Giro');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Zona');
            $table->string('Ciudad');
            $table->string('Estado');
            $table->string('Contacto');
            $table->string('Correo');
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
        Schema::dropIfExists('clients');
    }
}

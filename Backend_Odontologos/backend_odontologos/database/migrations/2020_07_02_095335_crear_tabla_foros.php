<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaForos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foros', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('descripción');
            $table->boolean('estado');
            $table->string('path');
            $table->unsignedBigInteger('creadopor')->nullable();
            $table->foreign('creadopor')->references('id')->on('odontologos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foros');
    }
}

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
            $table->string('descripcion');
            $table->boolean('estado');
            $table->unsignedBigInteger('creadopor')->nullable();
            $table->foreign('creadopor')->references('id')->on('odontologos');
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
        Schema::dropIfExists('foros');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaOdontologos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontologos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres',40);
            $table->string('apellidos',40);
            $table->string('path');
            $table->tinyInteger('estado')->default(0);
            $table->unsignedBigInteger('actualizadopor');
            $table->foreign('actualizadopor')->references('id')->on('users');
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
        Schema::dropIfExists('odontologos');
    }
}

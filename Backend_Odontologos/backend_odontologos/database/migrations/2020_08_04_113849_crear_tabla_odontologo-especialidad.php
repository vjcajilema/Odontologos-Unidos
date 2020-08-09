<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaOdontologoEspecialidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontologo-especialidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('odontologo')->nullable();
            $table->foreign('odontologo')->references('id')->on('odontologos');
            $table->unsignedBigInteger('especialidad')->nullable();
            $table->foreign('especialidad')->references('id')->on('especialidades');
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
        Schema::dropIfExists('odontologo-especialidad');
    }
}

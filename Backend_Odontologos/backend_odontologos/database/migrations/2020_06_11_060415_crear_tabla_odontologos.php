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
            $table->char('cedula', 10);
            $table->string('usuario');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('estado')->default(0);
            $table->unsignedBigInteger('actualizadopor')->nullable();
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

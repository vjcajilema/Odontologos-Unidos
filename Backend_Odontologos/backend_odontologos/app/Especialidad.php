<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidades';

    protected $fillable = [
		'nombre',
		'descripcion',
		'estado',

    ];


    public function odontologos()
    {
        return $this->hasMany('App\Odontologo-Especialidad');
    }
}

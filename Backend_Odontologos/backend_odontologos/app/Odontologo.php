<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    protected $table = 'odontologos';

    public $timestamps = true;

    protected $fillable = [
		'nombres',
		'apellidos',
		'cedula',
		'usuario',
		'email',
		'password',
		'estado',
		'actualizadopor',
    ];

	public function especialidades()
    {
        return $this->hasMany('App\Odontologo-Especialidad');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OdontologoEspecialidad extends Model
{

    protected $table = 'odontologo-especialidad';

    protected $fillable = [
		'id',
		'odontologo',
		'especialidad',

    ];

    public function odontologos()
    {
        return $this->belongsTo('App\Odontologo');
    }

    public function especialidades()
    {
        return $this->belongsTo('App\Especialidad');
    }
}

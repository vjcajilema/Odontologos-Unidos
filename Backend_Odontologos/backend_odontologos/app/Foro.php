<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    protected $table = 'foros';

    protected $fillable = [
		'titulo',
		'descripcion',
		'estado',

    ];


}

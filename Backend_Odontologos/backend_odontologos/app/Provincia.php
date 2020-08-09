<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    
    protected $table = 'provincias';

    public $timestamps = true;

    protected $fillable = [
		'nombre',
		'descripcion',
		'estado',
    ];

    public function ciudades()
    {
        return $this->hasMany('App\Ciudad');
    }

}

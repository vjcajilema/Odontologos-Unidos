<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    public $timestamps = true;

    protected $fillable = [
		'nombre',
		'descripcion',
		'estado',

    ];
    public function provincias()
    {
        return $this->belongsTo('App\Provincia');
    }
}

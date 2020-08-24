<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Clinica;
class ClinicaController extends Controller
{
    
    public function store(Request $request)
    {
        $nombre = $request['nombre'];
        $descripcion = $request['descripcion'];
        $latitud = $request['latitud'];

        $longitud = $request['longitud'];
        $ciudad = $request['ciudad'];

        $clinica=new Clinica();
        $clinica->nombre=$nombre;
        $clinica->descripcion=$descripcion;
        $clinica->latitud=$latitud;
        $clinica->longitud=$longitud;
        $clinica->ciudad_id=$ciudad;
        $clinica->estado=0;  
        $valor=false;
        $code = 500;
            $clinica->save();
            if($clinica->id){
                $mensaje= 'clinica agregada exitosamente';
                $valor=true;
                $code = 202;
            }


        return response()->json(['mensaje'=>$mensaje,'valor'=>$valor,'code'=>$code]);
           
    }




}

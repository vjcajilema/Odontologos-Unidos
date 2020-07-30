<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Foro;
class ForoController extends Controller
{
    public function store(Request $request)
    {
        
        $titulo = $request['titulo'];
        $descripcion = $request['descripcion'];
        
        if($titulo&&$descripcion){
            $foro = new Foro();
            $foro->titulo=$titulo;
            $foro->descripcion=$descripcion;
            $foro->estado=1;            
            $foro->save();
            $mensaje="Foro agregado";
            $valor=true;
            $code=202;
        }else{
            $mensaje="Eror al agregar foro";
            $valor=false;
            $code=500;
        }

        return response()->json(['mensaje'=>$mensaje,'valor'=>$valor,'code'=>$code]);
           
    }


}

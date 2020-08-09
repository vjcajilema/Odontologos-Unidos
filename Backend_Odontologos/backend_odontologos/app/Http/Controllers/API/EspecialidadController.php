<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Especialidad;

class EspecialidadController extends Controller
{
    
    public function getAll()
    {
        try{
        $especialidades = Especialidad::orderBy('id', 'asc')->get();
        if(!$especialidades){
            return response()->json(['mensaje'=>'Error al buscar especialidades','valor'=>null,'code'=>404]);
        }else{
            if($especialidades->count() === 0){
                return response()->json(['mensaje'=>'Especialidades no disponibles','valor'=>null,'code'=>404]);
            }else{
                $arrEspecialidades = [];
                foreach ($especialidades as $especialidad) {
                    $arrEspecialidad = [
                        'id' => $especialidad->id,
                        'nombre' => $especialidad->nombre,
                    ];

                    array_push($arrEspecialidades, $arrEspecialidad);
                }

                $result = array_merge( ['especialidades'=>$arrEspecialidades] );
                
                if (is_null($result)) {
                    return $this->sendError('Especialidades no disponibles.');
                }


                return response()->json(['mensaje'=>'Especialidades encontrados','valor'=>$result,'code'=>202]);
            }
        }
    
    } catch (Exception $e) {

        return response()->json(['mensaje'=>'error','valor'=>null,'code'=>500]);
    }


        
        
    }



}

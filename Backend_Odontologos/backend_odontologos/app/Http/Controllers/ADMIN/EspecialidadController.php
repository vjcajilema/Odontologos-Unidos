<?php

namespace App\Http\Controllers\ADMIN;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Especialidad;


class EspecialidadController extends Controller
{
    public function index()
    {
        $especialidades = Especialidad::orderBy('id', 'asc')->get();

        return view( 'admin/especialidad/index',['especialidades'=>$especialidades]);
        
    }

    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
        
            'name' 	=> 'required|string',
            'description' => 'string',

        ]);
        if ($validator->fails()) {
            return back();
        }else{
            $especialidad = new Especialidad();
            $especialidad->nombre=$request['name'];
            $especialidad->descripcion=$request['description'];
            $especialidad->estado=1;
            $especialidad->creadopor=auth()->user()->id;
            $especialidad->save();
        }

        return view( 'admin/especialidad/index',['especialidades'=>Especialidad::orderBy('id', 'asc')->get()]);
    }


    public function edit($id)
    {
        $especialidad=Especialidad::findOrFail($id);
        return view( 'admin/especialidad/edit',['especialidad'=>$especialidad]);
    }


    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
        
            'name' 	=> 'required|string',
            'description' => 'string',


        ]);
        if ($validator->fails()) {
            
            return back();
        }else{
            $especialidad = Especialidad::findOrFail($id);
            $especialidad->nombre=$request['name'];
            $especialidad->descripcion=$request['description'];
            $especialidad->update();
        }

        return view( 'admin/especialidad/index',['especialidades'=>Especialidad::orderBy('id', 'asc')->get()]);
    }

}

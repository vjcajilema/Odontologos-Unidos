<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Odontologo;

class OdontologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request['nombres'];
        $apellidos = $request['apellidos'];
        $cedula = $request['cedula'];

        $usuario = $request['usuario'];


        $email = $request['email'];
        $password = $request['password'];
        $photo = $request['photo'];

        $odontologo=new Odontologo();
        $odontologo->nombres=$nombre;
        $odontologo->apellidos=$apellidos;
        $url      = "/ImagenesUsuarios/";
        if(!$photo){
            $fileName ='avatar.png';

        }
        $storagePath =  $url . $fileName;
        $odontologo->path=$storagePath;
        $odontologo->estado=0;        
        $valor=false;
        $code = 500;
        $validar=Odontologo::where('cedula',$cedula)->first();
        if($validar){
            $mensaje= 'cedula en uso';
        }else{
            $odontologo->cedula=$cedula;
            $validar=Odontologo::where('usuario',$usuario)->first();
            if($validar){
                $mensaje= 'usuario en uso';
            }else{
                $odontologo->usuario=$usuario;
                $validar=Odontologo::where('email',$email)->first();
                if($validar){
                    $mensaje= 'email en uso';
                }else{
                    $odontologo->email=$email;
                    $odontologo->password=Hash::make($password);
                    $odontologo->save();
                    if($odontologo->id){
                        $mensaje= 'usuario agregado exitosamente';
                        $valor=true;
                        $code = 202;
                    }
                }   
            }
        }                


//        $fileName ='usuario'.$id. time() .'.jpg';



        return response()->json(['mensaje'=>$mensaje,'valor'=>$valor,'code'=>$code]);
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

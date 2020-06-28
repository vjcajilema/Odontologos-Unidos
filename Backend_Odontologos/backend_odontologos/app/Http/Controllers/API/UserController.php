<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    

    public function login(Request $request)
    {
        //dd('Credenciales '.$request->email.' '.$request->password);
        $credenciales=$request->only('email','password');
        if(Auth::attempt(['name'=> request('email'),'password'=> request('password')])){
            

            $mensaje= 'Usuario Logeado';
            $valor=true;
            $code = 200;
        }else{

            $mensaje= 'Error al iniciar sesion';
            $valor=false;
            $code = 500;
            
        }
        return response()->json(['mensaje'=>$mensaje,'valor'=>$valor,'code'=>$code]);
//        return response()->json(['token' => $token],$status);
        //$credenciales=$request->only('email','password');
        //if(Auth::attempt($credenciales)){
 /*       if(Auth::attempt(['name'=> request('email'),'password'=> request('password')])){
            return response()->json(['mensaje'=>'Login exitoso','valor'=>true,'code'=>202]);
        }else{
            return response()->json(['mensaje'=>'Error al inicio','valor'=>false,'code'=>500]);
        }*/
    }


}

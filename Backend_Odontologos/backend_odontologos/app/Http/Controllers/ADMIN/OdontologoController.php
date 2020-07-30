<?php

namespace App\Http\Controllers\ADMIN;

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
        $usuarios = Odontologo::orderBy('id', 'asc')->get();

        return view( 'admin/odontologo/index',['odontologos'=>$usuarios]);
        
    }


    public function desactivar(Request $request, $id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $odontologo=Odontologo::findOrFail($id);
        //dd($odontologo->id);
        return view( 'admin/odontologo/edit',['odontologo'=>$odontologo]);
    }


    public function habilitar($id)
    {
        $odontologo=Odontologo::findOrFail($id);
        $odontologo->estado=1;
        $odontologo->update();
        return view( 'admin/odontologo/edit',['odontologo'=>$odontologo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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

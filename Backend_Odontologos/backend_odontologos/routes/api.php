<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login','API\UserController@login');
Route::post('loginodontologo','API\UserController@loginOdontologo');
//Odontologo
Route::post('odontologostore','API\OdontologoController@store');
Route::get('/odontologobyespecialidad/{id}', 'API\OdontologoController@getbyEspecialidad');    


Route::post('forostore','API\ForoController@store');

//Especialidades
Route::get('/especialidades','API\EspecialidadController@getAll');

//CLinicas
Route::post('clinicastore','API\ClinicaController@store');
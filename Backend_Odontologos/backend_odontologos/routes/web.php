<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Odontologos
Route::get('odontologos','ADMIN\OdontologoController@index')->name('odontologo.index');
Route::get('odontologo/{id}', 'Admin\OdontologoController@show')->name('odontologos.show');
Route::get('habodontologo/{id}', 'Admin\OdontologoController@habilitar')->name('odontologos.habilitar');
Route::get('desodontologo/{id}', 'Admin\OdontologoController@deshabilitar')->name('odontologos.deshabilitar');
//Especialidades
Route::get('especialidades','ADMIN\EspecialidadController@index')->name('especialidad.index');
Route::get('especialidad/{id}', 'Admin\EspecialidadController@edit')->name('especialidad.edit');
Route::post('especialidadstore', 'Admin\EspecialidadController@store')->name('especialidad.store');
Route::patch('especialidadupdate/{id}', 'Admin\EspecialidadController@update')->name('especialidad.update');


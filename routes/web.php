<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('datasekolah','DataSekolah@index');
Route::get('datasekolah/add','DataSekolah@add');
Route::post('datasekolah/save','DataSekolah@save');
Route::get('datasekolah/edit/{id}','DataSekolah@edit');
Route::post('datasekolah/update','DataSekolah@update');
Route::get('datasekolah/delete/{id}','DataSekolah@delete');
Route::get('datasekolah/all','DataSekolah@all');
Route::get('datajurusan/add','DataJurusan@add');
Route::get('datajurusan/all','DataJurusan@all');
Route::post('datajurusan/save','DataJurusan@save');
Route::get('datajurusan/edit/{id}','DataJurusan@edit');
Route::get('datajurusan/delete/{id}','DataJurusan@delete');
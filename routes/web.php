<?php

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


// Route::get('/contact/{nombre}/{edad}', function ($nombre,$edad) {
//     return view('contact',array('nombres' =>$nombre,
//                                 'edad'=> $edad));
// });

// Route::post('/perfil', function () {
//     return view('contact');
// });

// Route::get('/perfil', function () {
//     return view('/perfil/perfil');
// });

// Route::match(['put','get'],'/perfil2', function () {
//     return "hola soy put y get";
// });

// Route::any('/any', function () {
//     return view('contact');
// });

//un solo controlador 
// Route::resource('mascotas','pruebaController');

/*
Route::get('/mascotas/{name?}','pruebaController@index');
Route::get('/contactp','pruebaController@contact');
Route::get('/perfilp','pruebaController@perfil');
Route::group(['prefix' => 'prueba'], function () {
    Route::get('/index','pruebaController@index');
    Route::get('/create','pruebaController@create');
    Route::get('/edit','pruebaController@edit');
                        Route::resource('restfull','restController');
});


   Route::get('/restfull/{admin?}',['middleware' => 'IsAdmin',
                       'uses'       => 'restController@saludarAdmin',
                       'as' => 'alias']);*/

Route::group(['prefix' => 'formulario'], function () {
                           Route::resource('coches', 'formulario\cochesController');
                       });

Route::resource('notes', 'NotesController');                       
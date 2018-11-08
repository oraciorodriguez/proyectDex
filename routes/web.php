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

Route::get('prueba/{name}', 'pruevacontrolador@prueba');

Route::resource('ncontrolador', 'nuevoControlador');



Route::get('/name/{name}/lastname/{lastname?}', function ($name, $lastname = 'apellido') {
    return 'hola soy '. $name . $lastname;
});

Route::get('/proyectDex', function () {
    return 'Hello World, esta es mi primer ruta :D.';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

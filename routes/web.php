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

// Route::get('/', function () {
//     return view('welcome');
// });

// FRONTEND

Route::get('/', 'Frontend\homeController@index')->name('/');
Route::get('noticia/{id}', 'Frontend\NoticiasController@index');
Route::get('categorias/listado/detalle/{id}', 'Frontend\VehiculoController@detalleVehiculo');
Route::get('categorias/listado/detalle', 'Frontend\homeController@detalle')->name('categorias/listado/detalle');
Route::get('categorias/listado', 'Frontend\homeController@listado')->name('categorias/listado');
Route::get('coches', 'Frontend\homeController@coches')->name('coches');
Route::get('categorias_coches', 'Frontend\homeController@categorias')->name('categorias_coches');
Route::get('sesion', 'Frontend\homeController@sesion')->name('sesion');
Route::get('registro', 'Frontend\homeController@registro')->name('registro');
Route::post('enviar', 'Frontend\ContactoController@procesar')->name('send_mail');


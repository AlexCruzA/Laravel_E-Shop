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
    //return ewdirect()->route('personas.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('articulos', 'ArticuloController');
Route::resource('categorias', 'CategoriaController');
Route::resource('carritocompras', 'CarritocompraController');
Route::resource('users', 'UserController');
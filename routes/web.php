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
    return view('home');
});
Route::get('/login', function () {
    return view('Login usuario');
});
Route::get('/logout', function () {
    return view('Logout usuario');
});
Route::get('/catalog', function () {
    return view('catalog.index');
});
Route::get('/catalog/show/{id}', function () {
    return view('catalog.show', array('id'=>$id));
});
Route::get('/catalog/create', function () {
    return view('Añadir pelicula');
});
Route::get('/catalog/edit/{id}', function () {
    return view('Modificar pelicula');
});
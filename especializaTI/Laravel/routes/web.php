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

Route::get('/categoria/{idCat}', function($idCat){
    return "Posts da categoria: {$idCat} ";
});

Route::get('/nome/nome2/nome3', function() {
    return "Rota grande";
})->name("rota.nomeada");

Route::any('/any', function(){
    return "Route any";
});

Route::match(['get', 'post'], '/match', function(){
    return "Route match";
});

Route::post('/post', function() {
    return "Route Post";
});

Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function() {
    Route::get('/grupo1', function() {
        return "Grupo 1";
    });
    Route::get('/grupo2', function() {
        return "Grupo 2";
    });
});

Route::get('/login', function(){
    return "Login";
});
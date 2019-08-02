<?php

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('paises', 'PaisController', ['parameters' => ['paises' => 'pais']]);
Route::apiResource('paises.departamentos', 'DepartamentoController',  ['parameters' => ['paises' => 'pais']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

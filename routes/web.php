<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get ('prueba', 'PruebaController@prueba');

Route::resource('trainers', 'TrainerController');
Route::resource('ganaderos', 'GanaderoController');
Route::resource('vacas', 'VacasController');
Route::resource('bajas', 'BajasController');



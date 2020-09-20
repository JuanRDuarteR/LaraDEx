<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get ('prueba', 'PruebaController@prueba');

Route::resource('trainers', 'TrainerController');




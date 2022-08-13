<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('form', 'App\Http\Controllers\FormController@create')->name('form.create');
Route::post('form', 'App\Http\Controllers\FormController@store')->name('form.store');
Route::post('show', 'App\Http\Controllers\FormController@show')->name('form.show');


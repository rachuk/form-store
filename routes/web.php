<?php

use Illuminate\Support\Facades\Route;

Route::get('form', 'App\Http\Controllers\FormController@create')->name('form.create');
Route::post('form', 'App\Http\Controllers\FormController@store')->name('form.store');


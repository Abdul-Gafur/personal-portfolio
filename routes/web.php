<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* ====================================================
****************** FRONTEND ROUTES ********************
=====================================================*/

Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index')->name('homepage');

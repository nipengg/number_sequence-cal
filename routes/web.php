<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/calculator', function(){
    return view('calculator');
});

Route::get('/', function(){
    return view('aritmatika1');
});

Route::get('/test', function(){
    return view('aritmatika');
});


<?php

use Illuminate\Support\Facades\Route;
use App\Models\Place;

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

Route::get('/' , function (){
    return view("index");
});




//web.php
Route::fallback(function () {
    return abort(404); //default 404
});


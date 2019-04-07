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

Route::get('/', function () {
    return view("pages.home");
});

Route::prefix("/view/resources")->group(function (){
    Route::get('/games', "Resources\GamesController@show");
});

Route::prefix("/download/resources")->middleware(['middleware'=>'throttle:1,10'])->group(function (){
    Route::get('/games/{id}', "Resources\GamesController@download");
});

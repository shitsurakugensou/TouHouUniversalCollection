<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', "Access\RootController@show")
    ->middleware(\App\Http\Middleware\Information\AnnouncementCheck::class);

Route::prefix("/view/resources")
    ->middleware(\App\Http\Middleware\Information\AnnouncementCheck::class)

    ->group(function (){
        Route::get('/games', "Resources\GamesController@show");
        Route::get('/tools', "Resources\ToolsController@show");
        Route::get('/lanCraft', "Resources\LanCraftController@show");
        Route::get('/tutorials', "Resources\TutorialsController@show");
    }
);

Route::prefix("/download/resources")->group(function (){
    Route::get('/games/{id}', "Resources\GamesController@download");
    Route::get('/tools/{id}', "Resources\ToolsController@download");
    Route::get('/lanCraft/{id}', "Resources\LanCraftController@download");
    Route::get('/tutorials/{id}', "Resources\TutorialsController@download");

});

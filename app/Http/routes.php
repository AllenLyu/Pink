<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller('bbs', 'bbsController');
Route::controller('mdd', 'mddController');
Route::controller('poi', 'poiController');
Route::controller('hotel', 'hotelController');
Route::controller('line', 'lineController');
Route::controller('favor', 'favorController');
Route::controller('my', 'myController');
Route::controller('artitle', 'artController');
Route::controller('search', 'searchController');

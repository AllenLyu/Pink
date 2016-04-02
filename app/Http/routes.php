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


Route::get('we', function () {

    $id = \Illuminate\Support\Facades\Input::get("id");
    view()->share("nihao",$id);
    $res = DB::table('test')->get();
    var_dump($res);exit();
    return $id;
});
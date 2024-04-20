<?php


use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;




Route::get('/test','TestController@index');

Route::get('/example','ExampleController@exp');

Route::get('/', function () {
    return view('welcome');
});



<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// register And Login


//Admin Group
Route::group(['prefix' => 'admin' , 'middleware' => 'auth:admin-api'], function(){
    // All Api's Conseder to Admin Functions 
});

// user Group
Route::group(['prefix' => 'user' , 'middleware' => 'auth:api'], function(){
    // All Api's Conseder to Admin Functions 
});

// Doctor Group
Route::group(['prefix' => 'doctor' , 'middleware' => 'auth:doctor-api'], function(){
    // All Api's Conseder to Doctors Functions 
});
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('m_users', 'm_UsersController@index');
// Route::get('m_users/{id}', 'm_UsersController@show');
Route::apiResource('m_users', 'm_UsersController');


//Route::apiResource('steps', 'StepsController');
Route::group(['prefix'=>'m_users'],function(){
    Route::apiResource('/{m_user}/steps', 'StepsController');

});

// Route::get('steps', 'StepsController@index');
// Route::get('steps/{id}', 'StepsController@show');
// //Route::get('usersteps/{serial_number}', 'StepsController@stepsuserindex');
// Route::post('steps', 'StepsController@store');
// Route::put('steps/{step_id}', 'StepsController@update');
// Route::delete('steps/{step_id}', 'StepsController@destroy');


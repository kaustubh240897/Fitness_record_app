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

Route::apiResource('m_collections', 'm_CollectionController');

//Route::apiResource('steps', 'StepsController');
Route::group(['prefix'=>'m_users'],function(){
    Route::apiResource('/{m_user}/steps', 'StepsController');

});

Route::group(['prefix'=>'m_users'],function(){
    Route::apiResource('/{m_user}/logs', 't_LogController');

});

Route::group(['prefix'=>'m_users'],function(){
    Route::apiResource('/{m_user}/usercollections', 't_CollectionUserController');

});


Route::group(['prefix'=>'m_collections'], function(){
   Route::apiResource('/{m_collection}/collections', 't_CollectionController');
});



// Route::get('steps', 'StepsController@index');
 Route::get('m_users/{m_user}/steps/{step}', 'StepsController@show');
// //Route::get('usersteps/{serial_number}', 'StepsController@stepsuserindex');
// Route::post('steps', 'StepsController@store');
// Route::put('steps/{step_id}', 'StepsController@update');
// Route::delete('steps/{step_id}', 'StepsController@destroy');



Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('payload', 'AuthController@payload');

});
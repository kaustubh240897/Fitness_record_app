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

#Route::apiResource('m_users', 'm_UsersController');

//Route::apiResource('m_collections', 'm_CollectionController');

//Route::apiResource('steps', 'StepsController');

# Route::group(['prefix'=>'m_users'],function(){
//     Route::apiResource('/{m_user}/steps', 'StepsController');

// });

// Route::group(['prefix'=>'m_users'],function(){
//     Route::apiResource('/{m_user}/logs', 't_LogController');

// });

// Route::group(['prefix'=>'m_users'],function(){
//     Route::apiResource('/{m_user}/usercollections', 't_CollectionUserController');

// });


// Route::group(['prefix'=>'m_collections'], function(){
//    Route::apiResource('/{m_collection}/collections', 't_CollectionController');
// });


Route::get('m_users/','m_UsersController@index');
Route::get('m_users/{m_user}/','m_UsersController@show');
Route::post('m_users/','m_UsersController@store');
Route::put('m_users/{m_user}', 'm_UsersController@update');

Route::get('steps', 'StepsController@index');
Route::get('steps/{step}','StepsController@show');
Route::post('steps/','StepsController@store');
Route::put('steps/{step}/', 'StepsController@update');
Route::delete('steps/{step}/','StepsController@destroy');

Route::get('latesttour/', 'StepsController@latestTour');
Route::get('gettodayrecipe/', 'CheckSerialNumberController@getTodayRecipe');

Route::get('logs/', 't_LogController@index');
Route::post('logs/', 't_LogController@store');
Route::put('logs/{log}/','t_LogController@update');
Route::get('checkserialnumber/{serial_number}','CheckSerialNumberController@show');
Route::get('calender/{date}','CalenderController@show');
Route::get('calender/','CalenderController@index');

Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('payload', 'AuthController@payload');

});
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'm_UsersWebController@create')->name('create');
Route::post('/', 'm_UsersWebController@store')->name('store');
Route::get('/createtour', 't_TourWebController@index')->name('index');
Route::get('/createtour/{id}','t_TourWebController@show')->name('tourdetails');
Route::post('/createtour/{id}', 't_TourWebController@store')->name('tourstore');
Route::post('/createtour', 't_TourWebController@createtourcache')->name('createsession');
Route::get('/home', 'HomeController@index')->name('home');

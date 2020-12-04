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

//Auth::routes();
Route::get('/', 'm_UsersWebController@create')->name('create');
Route::post('/', 'm_UsersWebController@store')->name('store');
Route::get('edit/{id}', 'm_UsersWebController@edit')->name('edit');
Route::post('update/{id}', 'm_UsersWebController@update')->name('update');
Route::get('/userdailyhistory', 'm_UsersWebController@dailydata')->name('userhistory');
Route::get('/reverseuserdailyhistory', 'm_UsersWebController@reversedailydata')->name('reverseuserdailyhistory');
Route::get('/usermonthlyhistory', 'm_UsersWebController@monthlydata')->name('usermonthlyhistory');
Route::get('/reverseusermonthlyhistory', 'm_UsersWebController@reversemonthlydata')->name('reverseusermonthlyhistory');
Route::get('/search','m_UsersWebController@search')->name('search');
Route::get('/mypage','m_UsersWebController@myPage')->name('mypage');
Route::get('/padometerscreen','m_UsersWebController@padometerScreen')->name('padometerscreen');
Route::get('/createtour', 't_TourWebController@index')->name('index');
Route::get('/createtour/{id}','t_TourWebController@show')->name('tourdetails');
Route::post('/createtour/{id}', 't_TourWebController@store')->name('tourstore');
Route::post('/createtour', 't_TourWebController@createtoursession')->name('createsession');
Route::get('/mycollection', 't_CollectionWebController@index')->name('mycollection');
Route::get('/reversemycollection', 't_CollectionWebController@reverseIndex')->name('reversemycollection');
Route::get('/mycollection/{id}','t_CollectionWebController@show')->name('collectiondetails');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logged-out', 'CustomAuthController@thankpage')->name('logout-page');


Route::get('/custom-register', 'CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('/custom-register', 'CustomAuthController@Register')->name('custom.register');

Route::get('/custom-login', 'CustomAuthController@showLoginForm')->name('custom.login');
Route::post('/custom-login', 'CustomAuthController@Login')->name('custom.login');

Route::get('/logout', 'CustomAuthController@showlogout')->name('custom.logout');
Route::post('/logout', 'CustomAuthController@logout')->name('logout');

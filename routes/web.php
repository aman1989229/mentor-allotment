<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('assign', function () {
    return view('projects.assign');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//contact us
Route::get ('about','PageController@about')->name('about');
Route::get ('contact','PageController@contact')->name('contact');
Route::get ('details','DetailController@index')->name('details');
Route::get ('students','DetailController@students')->name('students');

Route::get ('dashboard','DetailController@dashboard')->name('dashboard');

Route::resource('form','FormController',['except'=>'create']);
Route::resource('team','TeamController',['except'=>'create']);


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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//contact us
Route::get ('about','PageController@about')->name('about');
Route::get ('contact','PageController@contact')->name('contact');

Route::get ('details','DetailController@index')->name('details');
Route::get ('detail','DetailController@cgpa')->name('detail');


Route::get('assign/{id}',['as'=>'project.edit','uses'=>'ProjectController@edit']);
Route::get('delete/{id}',['as'=>'team.destroy','uses'=>'TeamController@destroy']);
Route::get('change/{id}',['as'=>'project.show','uses'=>'ProjectController@show']);
Route::get('edit/{id}',['as'=>'mentor.edit','uses'=>'MentorController@edit']);


Route::get ('students','DetailController@students')->name('students');

Route::get ('dashboard','DetailController@dashboard')->name('dashboard');

Route::resource('form','FormController',['except'=>'create']);
Route::resource('team','TeamController');
Route::resource('project','ProjectController');
Route::resource('mentor','MentorController');

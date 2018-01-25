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

Route::resource("courses", "CourseController");
Route::post('save','CourseController@save');
Route::DELETE('delete/{id}','CourseController@delete');
Route::put('update/{id}','CourseController@update');


Route::get('/home', 'HomeController@index');

Route::post('/language', array (
   'Middleware'=>'LanguageSwitcher',
   'uses'=>'LanguageController@index'
));

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::auth();


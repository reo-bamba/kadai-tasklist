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

//route::get('/', 'TasksController@index');
route::resource('tasks', 'TasksController');

//registration Users
route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// authentication
route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
route::post('login', 'Auth\LoginController@login')->name('login.post');
route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
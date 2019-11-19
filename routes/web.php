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
    return view('site/welcome');
});

Route::namespace('Admin')->prefix('admin')->group(function (){
	Route::resource('posts', 'AdminPostController');
	Route::resource('videos', 'AdminVideoController');
});


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
Route::get('/', 'QuestionController@showQuestion');
Route::get('/admin', 'AdminAuth\AuthController@showLoginForm');
Route::post('/login', 'AdminAuth\AuthController@login');
Route::group(['prefix'=>'/admin','middleware'=>['Admin']], function(){
	Route::resource('/questions', 'Admin\QuestionsController');
	Route::resource('/pages/profile', 'Admin\ProfileController');
	Route::resource('/pages/profile/password', 'Admin\PasswordController');
	Route::resource('/pages/profile/image', 'Admin\ImageController');
	Route::get('/dashboard', 'Admin\AdminController@dashboard');
	Route::get('/search', 'Admin\SearchController@index');
	Route::get('/logout', 'AdminAuth\AuthController@logout');
	Route::get('/pages/charts', 'Admin\ChartsController@index');
	
});

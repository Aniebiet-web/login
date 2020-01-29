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

Route::get('/', "AuthenController@welcome")->name('welcome');
Route::get('/index', "AuthenController@index")->name('index');
Route::get('/services', "AuthenController@services")->name('services');
Route::get('/dashboard', "AuthenController@dashboard")->name('dashboard');
Route::get('/about', "AuthenController@about")->name('about');
Route::get('/signup', "AuthenController@signup")->name('signup');
Route::get('/signup/login', "AuthenController@login")->name('login');

Route::post('/signup/postsignup', "AuthenController@postsignup")->name('postsignup');
Route::post('/signup/login/postlogin', "AuthenController@postlogin")->name('postlogin');
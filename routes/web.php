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

Route::view('/', 'welcome')->name('home');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/platform', 'platform')->name('platform');
Route::view('/support', 'support')->name('support');
Route::view('/support/documentation', 'documentation')->name('documentation');

Route::view('/blog', 'blog')->name('blog');

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->name('home');

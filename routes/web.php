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

Route::redirect('/', 'events' );

Auth::routes();

Route::get('news', 'Web\PageController@news')->name('news');
Route::get('news/{slug}', 'Web\PageController@post')->name('post');
Route::get('events', 'Web\PageController@events')->name('events');
Route::get('events/{slug}', 'Web\PageController@event')->name('event');
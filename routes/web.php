
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

Route::redirect('/', 'news' );


Auth::routes();

//web
Route::get('news', 'Web\PageController@news')->name('news');
Route::get('news/{slug}', 'Web\PageController@post')->name('post');
Route::get('events', 'Web\PageController@events')->name('events');
Route::get('events/{slug}', 'Web\PageController@event')->name('event');
Route::get('booking/{slug}', 'Web\PageController@booking')->name('booking');
Route::get('category/{slug}', 'Web\PageController@category')->name('category');
Route::get('tag/{slug}', 'Web\PageController@tag')->name('tag');

Route::resource('guests', 'Web\GuestController');

//admin
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
Route::resource('activities', 'Admin\ActivitController');
Route::resource('locals', 'Admin\LocalController');
Route::resource('districts', 'Admin\DistrictController');
Route::resource('posts', 'Admin\PostController');
Route::resource('pois', 'Admin\PoiController');
Route::resource('users', 'Admin\UserController');
Route::resource('grandmas', 'Admin\GrandmaController');
Route::resource('ocasions', 'Admin\OcasionController');

//mail
Route::get('send', 'Web\MailController@send')->name('send');

//terms
Route::get('terms', function () {
    return view('web.partials.terms');
});

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/user/{id}/{name}', function( $id, $name ){
    return 'This user is ' . $name . ' with id of ' . $id;
});*/

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about-us', 'PagesController@about')->name('about-us');
Route::get('/services', 'PagesController@services')->name('services');

Route::resource('posts', 'PostsController');
// User routes/
Auth::routes();
Route::get('/user/settings', 'UsersController@settings')->name('user.settings');
Route::get('/user/search-history', 'UsersController@search_history')->name('search.history');
Route::get('/user/saved-searches', 'UsersController@saved_searches')->name('saved.searches');
Route::get('/user/viewed-properties', 'UsersController@viewed_properties')->name('viewed.properties');
Route::get('/user/saved-properties', 'UsersController@saved_properties')->name('saved.properties');
Route::get('/user/favourites', 'UsersController@favourites')->name('favourites');
Route::get('/user/messages', 'UsersController@favourites')->name('user.messages');

Route::get('/home', 'HomeController@index')->name('home');

// Administrator routes
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login');
Route::get('/admin', 'AdminsController@index')->name('admin.dashboard');

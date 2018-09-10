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


Route::get('/hello', function () {
//    return 'Hello World';
//    return '<h1>Hello World</h1>';

});

// Route::post
// Route:: delete

/*
Route::get('/about', function () {
    return view('pages.about');
 });
*/

/*
Route::get('/about/{id}', function ($id) {
    return 'This is user '.$id;
});
*/

Route::get('/index','MainController@index');
Route::get('/services','MainController@services');
Route::get('/about','MainController@about');
Route::resource('posts','PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

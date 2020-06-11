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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single', function () {
    return view('single');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// News
Route::view('/insertnews','insertNews')->name('insertNews');
Route::post('/news/insert',"NewsController@insert" )->name('addnews');

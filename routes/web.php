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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// News
Route::get('/','NewsController@show');
Route::view('/insertnews','insertNews')->name('insertNews');
Route::post('/news/insert',"NewsController@insert" )->name('addnews');
Route::get('/news/{singleNews}','NewsController@singleNews');
//Route::get('/single','NewsController@show');

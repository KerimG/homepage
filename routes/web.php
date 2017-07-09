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

Route::get('/', 'HomepageController@index')->name('index');

Route::get('/imprint', 'HomepageController@imprint')->name('imprint');

Route::get('/blog', 'BlogController@frontpage')->name('blog');
Route::get('/blog/{articleUrl}', 'ArticleController@article')->name('getArticle');

Route::post('/blog', 'ArticleController@create')->name('createArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('article/category', 'HomeController@filterByCategory')->name('articles.bycat');

Route::get('article/{id}', 'HomeController@showArticle')->name('article.show');

Route::post('/comment', 'CommentsController@store')->name('comment.store');

Route::prefix('admin')->name('admin.')->group(function ()
{
	Route::middleware('auth')->group(function ()
	{
        Route::get('/',function()
        {
        	return view('admin.index');

        })->name('index');

		Route::resource('articles', 'ArticlesController');
    });
	

});
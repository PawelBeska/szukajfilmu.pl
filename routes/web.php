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

Route::get('/', 'IndexController@index')->name('home.index');
Route::get('/sitemap.xml', 'IndexController@sitemap')->name('home.sitemap');
Route::get('/contact', 'IndexController@contact')->name('home.contact');
Route::get('/help', 'IndexController@help')->name('home.help');
Route::post('/search','IndexController@search')->name('home.search');
Route::get('/file/{filename}/{token}','FileController@index')->name('home.file');
Route::get('/series','SeriesController@index')->name('home.series');
Route::post('/series/ajax','SeriesController@ajax')->name('series.ajax');
Route::get('/movies','MoviesController@index')->name('home.movies');
Route::get('/movie/{title}/{id}','MovieController@movie')->name('home.movie');
Route::post('/movie/{title}/{id}','MovieController@movie')->name('home.movie.ajax');
Route::put('/movie/{title}/{id}','MovieController@iframe')->name('home.movie.iframe');
Route::post('/movies','MoviesController@ajax')->name('movies.ajax');
Route::post('/genres','GenresController@ajax')->name('genres.ajax');

Route::group(['middleware' => ['guest']], function () {
Route::get('/login','Auth\LoginController@index')->name('home.login');
Route::post('/login','Auth\LoginController@login')->name('home.login.ajax');
Route::get('/register','Auth\RegisterController@index')->name('home.register');
Route::post('/register','Auth\RegisterController@register')->name('home.register.ajax');
    });

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', function () {
        \Illuminate\Support\Facades\Auth::logout();
        return \Illuminate\Support\Facades\Redirect::to(route('home.index'));
    })->name('home.logout');
});
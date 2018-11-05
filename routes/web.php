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
    return redirect()->route('inicio');
});

Auth::routes();

Route::get('/inicio', 'Web\PageController@inicio')->name('inicio');
Route::get('/contactos', 'Web\PageController@contactos')->name('contactos');
Route::get('/financiamiento', 'Web\PageController@financiamiento')->name('financiamiento');
Route::get('/noticias', 'Web\PageController@noticias')->name('noticias');
Route::get('/proyectos', 'Web\PageController@proyectos')->name('proyectos');
Route::get('/quienesomos', 'Web\PageController@quienesomos')->name('quienesomos');

Route::get('/blog', 'Web\PageController@blog')->name('blog');

Route::get('/post/{slug}', 'Web\PageController@post')->name('post');
Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');

Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
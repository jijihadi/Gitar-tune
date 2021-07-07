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

// Cool Dashboard
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/gitar', 'GitarController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stem', 'PagesController@stem');

// Admin Dashboard
Auth::routes();
Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/dashboard', 'AdminController@index');
});

// Admin Guitar
Route::get('/gitars', 'Admin\GitarsController@index')->name('gitars');
Route::get('/gitars/add', 'Admin\GitarsController@add')->name('gitars.add');
Route::post('/gitars/insert', 'Admin\GitarsController@insert')->name('gitars.insert');
Route::get('/gitars/edit/{id}', 'Admin\GitarsController@edit')->name('gitars.edit');
Route::post('/gitars/update/{id}', 'Admin\GitarsController@update')->name('gitars.update');
Route::get('/gitars/delete/{id}', 'Admin\GitarsController@delete')->name('gitars.delete');
// Admin Users
Route::get('/users', 'Admin\UsersController@index')->name('users');
Route::get('/users/add', 'Admin\UsersController@add')->name('users.add');
Route::post('/users/insert', 'Admin\UsersController@insert')->name('users.insert');
Route::get('/users/edit/{id}', 'Admin\UsersController@edit')->name('users.edit');
Route::post('/users/update/{id}', 'Admin\UsersController@update')->name('users.update');
Route::get('/users/delete/{id}', 'Admin\UsersController@delete')->name('users.delete');
// Admin Merjen
Route::get('/merjen', 'Admin\MerjenController@index')->name('merjen');
// merk
Route::get('/merjen/addm', 'Admin\MerjenController@addm')->name('merk.add');
Route::post('/merjen/insertm', 'Admin\MerjenController@insertm')->name('merk.insert');
Route::get('/merjen/editm/{id}', 'Admin\MerjenController@editm')->name('merk.edit');
Route::post('/merjen/updatem/{id}', 'Admin\MerjenController@updatem')->name('merk.update');
Route::get('/merjen/deletem/{id}', 'Admin\MerjenController@deletem')->name('merk.delete');
// jenis
Route::get('/merjen/addj', 'Admin\MerjenController@addj')->name('jenis.add');
Route::post('/merjen/insertj', 'Admin\MerjenController@insertj')->name('jenis.insert');
Route::get('/merjen/editj/{id}', 'Admin\MerjenController@editj')->name('jenis.edit');
Route::post('/merjen/updatej/{id}', 'Admin\MerjenController@updatej')->name('jenis.update');
Route::get('/merjen/deletej/{id}', 'Admin\MerjenController@deletej')->name('jenis.delete');

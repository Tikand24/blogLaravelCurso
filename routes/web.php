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
	return view('auth.login');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy',
	]);
	Route::resource('categorias', 'CategoriasController');
	Route::get('categorias/{id}/destroy', [
		'uses' => 'CategoriasController@destroy',
		'as' => 'admin.categorias.destroy',
	]);
	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy',
	]);
	Route::resource('articulos', 'ArticulosController');
	Route::get('articulos/{id}/destroy', [
		'uses' => 'ArticulosController@destroy',
		'as' => 'admin.articulos.destroy',
	]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

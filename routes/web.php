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
Route::get('categorias/{name}', [
	'uses' => 'FontController@searchCategory',
	'as' => 'inicio.buscar.categoria',
]);
Route::get('tags/{name}', [
	'uses' => 'FontController@searchTag',
	'as' => 'inicio.buscar.tag',
]);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' => 'admin.index',
	]);
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

	Route::get('imagenes', [
		'uses' => 'ImagenesController@index',
		'as' => 'admin.imagenes.index',
	]);
});
Auth::routes();
Route::get('/inicio', 'FrontController@index')->name('inicio');

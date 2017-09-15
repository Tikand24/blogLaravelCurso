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
	'uses' => 'FrontController@searchCategory',
	'as' => 'inicio.buscar.categoria',
]);
Route::get('tags/{name}', [
	'uses' => 'FrontController@searchTag',
	'as' => 'inicio.buscar.tag',
]);
Route::get('categoria/{name}', [
	'uses' => 'FrontController@categoria',
	'as' => 'categoria',
]);
Route::get('articulo/{name}', [
	'uses' => 'FrontController@articulo',
	'as' => 'articulo',
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' => 'admin.index',
	]);
	Route::group(['middleware' => 'admin'], function () {

		Route::resource('users', 'UsersController');
		Route::get('users/{id}/destroy', [
			'uses' => 'UsersController@destroy',
			'as' => 'admin.users.destroy',
		]);
	});
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
	Route::get('perfil', [
		'uses' => 'UsersController@perfil',
		'as' => 'admin.perfil',
	]);
});
Auth::routes();
Route::get('/inicio', 'FrontController@index')->name('inicio');

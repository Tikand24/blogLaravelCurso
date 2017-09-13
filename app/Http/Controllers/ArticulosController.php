<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\ArticuloRequest;
use App\Image;
use App\Tag;
use Illuminate\Http\Request;

class ArticulosController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		return view('admin.articulos.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		$categorias = Category::orderBy('name', 'ASC')->pluck('name', 'id');
		$tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
		return view('admin.articulos.create')
			->with('categorias', $categorias)
			->with('tags', $tags);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ArticuloRequest $request) {
		$articulo = new Article();
		$articulo->title = $request->titulo;
		$articulo->content = $request->contenido;
		$articulo->user_id = \Auth::user()->id;
		$articulo->category_id = $request->categorias;
		$articulo->save();
		if ($request->file('imagen')) {
			$file = $request->file('imagen');
			$name = 'blog_' . time() . '.' . $file->getClientOriginalExtension();
			$path = public_path() . '/images/articles/';
			$file->move($path, $name);
			$image = new Image();
			$image->name = $name;
			$image->article()->associate($articulo);
			$image->save();
		}
		$articulo->tags()->sync($request->tag);
		flash('se ha creado el articulo ' . $articulo->title . ' de forma satisfactoria')->success();
		return redirect()->route('articulos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}

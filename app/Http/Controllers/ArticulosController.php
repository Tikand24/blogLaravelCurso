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
	public function index(Request $request) {
		//
		$articles = Article::search($request->name)->orderBy('id', 'DESC')->paginate(5);
		$articles->each(function ($articles) {
			$articles->category;
			$articles->user;
		});
		return view('admin.articulos.index')->with('articulos', $articles);
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
		$articulo = Article::find($id);
		$categorias = Category::orderBy('name', 'ASC')->pluck('name', 'id');
		$tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
		return view('admin.articulos.edit')
			->with('categorias', $categorias)
			->with('tags', $tags)
			->with('tagsArticulo', $articulo->tags->pluck('id')->toArray())
			->with('articulo', $articulo);
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
		$article = Article::find($id);
		$article->title = $request->titulo;
		$article->content = $request->contenido;
		$article->category_id = $request->categorias;
		$article->save();
		$article->tags()->sync($request->tag);
		flash('se ha actualizado el articulo ' . $article->title . ' de forma satisfactoria')->success();
		return redirect()->route('articulos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		$articulo = Article::find($id);
		$articulo->delete();
		flash('El  articulo ' . $articulo->name . ' se borro de forma exitosa')->error();
		return redirect()->route('articulos.index');
	}
}

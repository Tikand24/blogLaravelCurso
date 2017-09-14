<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Tag;
use App\User;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$articulos = Article::orderBy('id', 'DESC')->paginate(6);
		$articulos->each(function ($articulos) {
			$articulos->images;
		});
		return view('admin.index')
			->with('numeroArticulos', Article::count())
			->with('numeroTags', Tag::count())
			->with('numeroCategorias', Category::count())
			->with('numeroUsuarios', User::count());
	}
}

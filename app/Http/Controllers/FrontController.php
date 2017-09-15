<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller {
	public function index(Request $request) {
		Carbon::setLocale('es');
		$articulos = Article::search($request->name)->orderBy('id', 'DESC')->paginate(9);
		$articulos->each(function ($articulos) {
			$articulos->images;
		});
		return view('welcome')->with('articulos', $articulos);
	}
	public function categoria($name) {
		Carbon::setLocale('es');
		$categoria = Category::searchCategory($name)->first();
		$articulos = $categoria->articles()->paginate(9);
		$articulos->each(function ($articulos) {
			$articulos->images;
		});
		return view('welcome')->with('articulos', $articulos);
	}
	public function articulo($slug) {
		$articulo = Article::where('slug', $slug)->firstOrFail();
		$articulo->category;
		$articulo->users;
		$articulo->tags;
		$articulo->images;
		return view('front.articulo')->with('articulo', $articulo);
	}
}

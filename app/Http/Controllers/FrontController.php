<?php

namespace App\Http\Controllers;
use App\Article;
use Carbon\Carbon;

class FrontController extends Controller {
	public function index() {
		Carbon::setLocale('es');
		$articulos = Article::orderBy('id', 'DESC')->paginate(6);
		$articulos->each(function ($articulos) {
			$articulos->images;
		});
		return view('welcome')->with('articulos', $articulos);
	}

}

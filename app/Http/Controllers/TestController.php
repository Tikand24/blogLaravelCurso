<?php

namespace App\Http\Controllers;
use App\Article;

class TestController extends Controller {
	//
	public function view($id) {
		$article = Article::find($id);
		return view('test.index', ['prueba' => $article]);
	}
}

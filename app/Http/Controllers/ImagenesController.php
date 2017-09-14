<?php

namespace App\Http\Controllers;

use App\Image;

class ImagenesController extends Controller {
	//
	public function index() {
		$imagenes = Image::all();
		$imagenes->each(function ($imagenes) {
			$imagenes->article();
		});
		return view('admin.imagenes.index')->with('imagenes', $imagenes);
	}
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoriasRequest;
use Illuminate\Http\Request;

class CategoriasController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		$categorias = Category::orderBy('id', 'ASC')->paginate(10);
		return view('admin.categorias.index')->with('categorias', $categorias);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.categorias.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(CategoriasRequest $request) {
		//
		$categoria = new Category();
		$categoria->name = $request->categoria;
		$categoria->save();
		flash('Categoria Creada Exitosamente')->success();
		return redirect()->route('categorias.index');
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
		$categoria = Category::find($id);
		$datos = array('categoria' => $categoria);
		return view('admin.categorias.edit')->with($datos);
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
		$categoria = Category::find($id);
		$categoria->name = $request->categoria;
		$categoria->save();
		flash('La categoria se actualizo correctamente')->success();
		return redirect()->route('categorias.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		$categoria = Category::find($id);
		$categoria->delete();
		flash('La categoria ' . $categoria->name . ' se elimino correctamente')->error();
		return redirect()->route('categorias.index');
	}
}

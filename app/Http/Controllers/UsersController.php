<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		$usuarios = User::orderBy('id', 'ASC')->paginate(10);
		return view('admin.users.index')->with('users', $usuarios);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$miembros = array('member' => 'Miembros', 'admin' => 'Administrador');
		$datos = array('miembros' => $miembros);
		return view('admin.users.create', $datos);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(UserRequest $request) {
		$usuario = new User();
		$usuario->name = $request->nombreUsuario;
		$usuario->email = $request->emailUsuario;
		$usuario->password = password_hash($request->password, PASSWORD_DEFAULT);
		$usuario->type = $request->tipoMiembro;
		$usuario->save();
		flash('Usuario Creado Exitosamente')->success();
		return redirect()->route('users.index');
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
		$usuario = User::find($id);
		$miembros = array('member' => 'Miembros', 'admin' => 'Administrador');
		$datos = array('miembros' => $miembros, 'user' => $usuario);
		return view('admin.users.edit')->with($datos);
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
		$usuario = User::find($id);
		$usuario->name = $request->nombreUsuario;
		$usuario->email = $request->emailUsuario;
		$usuario->type = $request->tipoMiembro;
		$usuario->save();
		flash('Los datos de ' . $usuario->name . ' se han actualizado correctamente')->success();
		return redirect()->route('users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		$usuario = User::find($id);
		$usuario->delete();
		flash('El usuario ' . $usuario->name . ' se borro de forma exitosa')->error();
		return redirect()->route('users.index');

	}
}

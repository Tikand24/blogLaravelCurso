<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'nombreUsuario' => 'min:4|max:150|required',
			'emailUsuario' => 'min:4|max:150|required|unique:users,email',
			'password' => 'min:4|max:150|required',
			'passRepeat' => 'min:4|max:150|required',
			'tipoMiembro' => 'required',
		];
	}
}

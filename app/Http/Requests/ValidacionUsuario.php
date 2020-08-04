<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'usuarios' => 'required|max:50|unique:usuario,usuarios,' . $this->route('id'),
            'nombre' => 'required|max:50',
            'email' => 'required|email|max:100|unique:usuario,email,' . $this->route('id'),
            'password' => 'required|min:5',
            're_password' => 'required|same:password',
            'rol_id' => 'required|integer'
        ];
    }
}

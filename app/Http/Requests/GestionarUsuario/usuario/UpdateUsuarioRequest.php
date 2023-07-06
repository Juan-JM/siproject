<?php

namespace App\Http\Requests\GestionarUsuario\usuario;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required','max:20','unique:usuario,nombre,'.$this->route('usuario')->id.',id'],
            'clave' => ['required','min:8',],
            'rol' => ['required','exists:rol,id'],
            'personal' => ['required','exists:personal,ci']
        ];
    }
}

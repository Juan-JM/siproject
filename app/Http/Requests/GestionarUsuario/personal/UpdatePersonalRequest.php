<?php

namespace App\Http\Requests\GestionarUsuario\personal;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonalRequest extends FormRequest
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
            'ci' => 'required|numeric|digits_between:1,9|unique:personal,ci,'.$this->route('personal')->ci.',ci',
            'nombres' => 'required|max:30',
            'apellidos' => 'required|max:30',
            'telefono' => 'required|numeric|digits_between:1,9',
            'correo' => 'required|max:50|email',
            'sexo' => 'required|in:M,F',
            'domicilio' => 'required|max:50',
            'id_cargo' => 'required|exists:cargo,id',
        ];
    }
}

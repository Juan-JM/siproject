<?php

namespace App\Http\Requests\GestionarUsuario\propietario;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropietarioRequest extends FormRequest
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
            'ci' => ['required','numeric','unique:propietario,ci,'.$this->route('propietario')->ci.',ci','digits_between:1,9'],
            'nombre' => ['required','max:50'],
            'correo' => ['required','max:50','email'],
            'telefono' => ['required','numeric','digits_between:1,9']
        ];
    }
}

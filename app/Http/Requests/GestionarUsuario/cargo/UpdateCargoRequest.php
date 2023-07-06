<?php

namespace App\Http\Requests\GestionarUsuario\cargo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCargoRequest extends FormRequest
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
        $this->merge([
            'nombre' => mb_strtolower($this->nombre, 'UTF-8')
        ]);
        return [
            'nombre' => 'required|string|max:30|unique:cargo,nombre,'.$this->route('cargo')->id.',id'
        ];
    }
}

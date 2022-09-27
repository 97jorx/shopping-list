<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShoppingList extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|unique:products',
            'descripcion' => 'max:255',

        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'nombre de la lista'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la lista es obligatorio.',
            'nombre.unique' => 'Ya existe una lista con ese nombre.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelosPorMarcaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'marca_id'=>'required|numeric'
        ];
    }

    public function message(): array{

        return [
            'numeric'=>'El campo :attribute debe ser un número',
            'required'=>'El campo :attribute es requerido'
        ];

    }
}

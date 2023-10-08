<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DispositivosPorBodegaRequest extends FormRequest
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
            'bodega_id'=>'numeric',
            'modelo_id'=>'numeric'
        ];
    }

    public function message(): array{

        return [
            'numeric'=>'El campo :attribute debe ser un número',
            'required'=>'El campo :attribute es requerido'
        ];

    }
}

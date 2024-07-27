<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleadoRequest extends FormRequest
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
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Ci' => 'required|max:9',
            'Telefono' => 'required',
            'FechaContratacion' => 'required',
            'Puesto' => 'required',
            'RestauranteId' => 'required',
            'Email' => 'required|email|unique:empleados,Email',
            //
        ];
    }
    public function messages(): array
    {
        return[
            'FechaContratacion.required' => 'El campo Fecha de Contratación es obligatorio.',
//            'FechaContratacion.date' => 'El campo Fecha de Contratación debe ser una fecha válida.',
        ];
    }
}

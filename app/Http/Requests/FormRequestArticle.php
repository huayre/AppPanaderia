<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestArticle extends FormRequest
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
            'name'=>'required',
            'category_id'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'alert'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'model.required'=>'El nombre o modelo del artículos es obligatorio',
            'category_id.required'=>'Seleccione una categoría',
            'price.required'=>'Ingrese el précio',
            'stock.required'=>'Ingrese el Stock Actual',
            'alert.required'=>'Ingrese la cantidad mínima para la alerta'
        ];

    }
}

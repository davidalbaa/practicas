<?php

namespace App\Http\Requests;

use App\Rules\Max5;
use Illuminate\Foundation\Http\FormRequest;

class CursosRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "name" => ["required", new Max5("El nombre solo debe tener 5 caracteres")]
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "falto porner el nombre update"
        ];
    }
}

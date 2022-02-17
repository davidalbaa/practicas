<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "user_name" => ["required"],
            "password" => ["required"]
        ];
    }
    public function messages()
    {
        return [
            "user_name.required" => "Nombre de usuario obligatorio",
            "password.required" => "Contraseña de usuario obligatoría",
        ];
    }
}

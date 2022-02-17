<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Max5 implements Rule
{
    public $msj;
    public function __construct($msj)
    {
        $this->msj = $msj;
    }


    public function passes($attribute, $value)
    {
        if (strlen($value) > 5) {
            return false;
        }
        return true;
    }

    public function message()
    {
        return "$this->msj";
    }
}

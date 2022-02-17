<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // Props
    // Especificar tabla
    protected $table = "cursos";
    // PK
    // protected $primaryKey = "id";
    // Quitar restricciones de tiempo
    // public $timestamps = false;
    // actualizar nombres
    // const CREATED_AT = 'new_name';
    // const UPDATED_AT = 'new_name';
    // protected $connection = "sqlite";
    // Valores predeterminados
    // protected $attributes = [
    //     "name" => "David"
    // ];

    protected $fillable = [
        'name'
    ];
}

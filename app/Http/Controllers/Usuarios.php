<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class Usuarios extends Controller
{
    public function index()
    {
        // Forma 1
        // $curso = new Curso();
        // $curso->name = '';
        // $curso->save();
        // Forma 2
        // $curso = Curso::create([
        //     "name" => "Quitzé"
        // ]);
        // $arr = [
        //     "name" => "Quitzé 4"
        // ];
        // Curso::create($arr);
        // Editar

        // $curso = Curso::find(3);
        // $curso->name = 'Quitzé updated';
        // $curso->save();

        //

        // $arr = [
        //     "name" => "Quitzé new updated"
        // ];
        // $curso->update($arr);

        // Eliminar
        // $curso = Curso::find(5);
        // $curso->delete();
        // Curso::destroy([2, 3, 4]);
        // Curso::destroy(2, 3, 4);
        // Curso::destroy(2);
        //truncate
        // Curso::truncate();
        // return Curso::all();
        return view("inicio");
    }
}

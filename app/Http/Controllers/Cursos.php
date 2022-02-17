<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursosRequest;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Cursos extends Controller
{
    public function __construct()
    {
        // revalidate
        // $this->middleware("prueba")->only("edit");
        // $this->middleware(["revalidate", "auth"]);
        // excluir
        // $this->middleware("auth")->except("index");
        // aplicar a solo uno
        // $this->middleware("auth")->only("index");
    }

    public function dataAjax()
    {
        $per_page = (request()->per_page) ? request()->per_page : 150;

        $select = ['id', 'name'];

        $items =  Curso::select($select)->paginate($per_page);

        return $items;
    }
    public function index()
    {
        $key = "cursos";
        if (request()->page) {
            $key = $key . request()->page;
        }
        if (Cache::has($key)) {
            $data = Cache::get($key);
        } else {
            $data =  Curso::paginate(10000);
            Cache::put($key, $data);
        }
        $titulo = "Cursos";
        return view("panel.cursos.index", compact("titulo", "data"));
    }
    public function create()
    {
        $titulo = "Agregar curso";
        $item = new Curso();
        $btnTxt = "Agregar curso";
        return view("panel.cursos.add", compact("titulo", "item", "btnTxt"));
    }
    public function store(CursosRequest $request)
    {
        try {
            $item = new Curso();
            $item->name = $request->name;
            $item->save();
            Cache::flush();
            return redirect()->route("cursos")->with("status", true);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function edit($id)
    {
        try {
            $titulo = "Editar curso";
            $item = Curso::find($id);
            $item->name;
            $btnTxt = "Actualizar curso";
            return view("panel.cursos.edit", compact("titulo", "item", "btnTxt"));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $item = Curso::find($id);
            $item->name;
            $item->name = $request->name;
            $item->save();
            Cache::flush();
            return redirect()->route("cursos");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function show($id)
    {
        try {
            $item = Curso::find($id);
            $item->name;
            $titulo = "Eliminar curso $item->name";
            return view("panel.cursos.show", compact("titulo", "item"));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function destroy($id)
    {
        try {
            $item = Curso::find($id);
            $item->name;
            $item->delete();
            Cache::flush();
            return redirect()->route("cursos");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function crear()
    {
        // for ($i = 1; $i < 30000; $i++) {

        //     $item = new Curso();

        //     $item->name = "cursos$i";

        //     $item->save();

        // }
    }
}

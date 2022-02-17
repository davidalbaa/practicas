<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    public function __construct()
    {
        // excluir
        // $this->middleware("auth")->except("index");
        // aplicar a solo uno
        $this->middleware("revalidate");
        $this->middleware("guest")->except("logout");
    }

    public function index()
    {
        $titulo = "Login";
        return view("panel.auth.login", compact("titulo"));
    }
    public function login(AuthRequest $request)
    {
        $credenciales = $request->only("user_name", "password");

        if (FacadesAuth::attempt($credenciales)) {
            Session(['idCarrito' => '123456']);
            
            request()->session()->regenerate();
            return redirect()->route("cursos");
        }
        return back()->withInput([
            "user_name" => $request->user_name,
            "password" => $request->password
        ]);
    }
    public function logout()
    {
        FacadesAuth::logout();
        Session::flush();
        return redirect()->route("auth");
    }
   
}

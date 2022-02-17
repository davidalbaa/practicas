<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Prueba
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->rol == "administrador") {
            return $next($request);
        }
        return redirect()->route("cursos");
    }
}

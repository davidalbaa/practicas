<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Revalidate
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        return $response
            ->header("Cache-control", "nocache, no-store, max-age=0, must-revalidate")
            ->header("Expires", "Fri, 01 Jan 1990 00:00:00 GMT");
    }
}

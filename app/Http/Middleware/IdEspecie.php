<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class IdEspecie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Cookie::has(env('ID_ESPECIE', ''))) {
            return redirect()->route('especie.index');
        }

        $request->id_especie = Cookie::get(env('ID_ESPECIE', ''));
        
        return $next($request);
    }
}

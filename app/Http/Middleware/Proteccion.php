<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Proteccion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rols): Response
    {
        $rolesPermitidos = explode('|', $rols);
        $rolUsuario = strtolower($request->user()->rols->label);
        if(!in_array($rolUsuario, $rolesPermitidos))
            return abort(403,__('Unauthorized'));
        return $next($request);
    }
}
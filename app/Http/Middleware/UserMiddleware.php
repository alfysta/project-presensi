<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $id_sdm_pengguna): Response
    {
        if (Auth::user()->id_sdm_pengguna == $id_sdm_pengguna) {

            return $next($request);
        }
        if (Auth::user()->id_sdm_pengguna == 1) {
            return redirect('/home');
        } else {
            return redirect('/');
        }
    }
}

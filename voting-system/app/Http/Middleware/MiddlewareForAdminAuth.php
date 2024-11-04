<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MiddlewareForAdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (\Illuminate\Support\Facades\Session::has('auth')){

            if (\Illuminate\Support\Facades\Session::get('auth')){

                return $next($request);
            }else{

                return redirect('/');
            }

        }else{
            return redirect('/');
        }

    }
}

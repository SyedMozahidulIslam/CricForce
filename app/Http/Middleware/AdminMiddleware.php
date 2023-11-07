<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Symfony\Component\HttpFoundation\Response;


class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return $next($request);
        }
       
        return response()->view('errors.404', [], 403);  // Redirect to a suitable page if the user is not an admin.
    }
}

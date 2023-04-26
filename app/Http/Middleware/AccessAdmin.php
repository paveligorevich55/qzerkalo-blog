<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AccessAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() &&
            Auth::user()->hasAnyRoles(['Administrator', 'Editor', 'Writer']))
        {
            return $next($request);
        } else if (Auth::check() &&
                    Auth::user()->hasRole('User'))
        {
            return redirect('homepage');
        }
        abort(403);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // if (!Auth()->user()->hasRole($role)) {
        //     // Redirect...
        //     return abort(403);
        // }

        // if (!$request->user()->hasRole($role)) {
        //     // Redirect...
        //     return abort(403);
        // }

        if(auth()->user()->role !== $role) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}

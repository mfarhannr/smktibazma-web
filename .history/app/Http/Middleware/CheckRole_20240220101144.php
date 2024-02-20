<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, ...$roles)
    // {
    //     if (!Auth::check()) {
    //         return redirect('/');
    //     }

    //     $user = Auth::user();

    //     if (in_array($user->role, $roles)) {
    //         return $next($request);
    //     }
    //     return abort(403, 'Unauthorized action.');
    // }
    // public function handle($request, Closure $next, ...$roles)
    // {
    //     if (in_array($request->user()->role, $roles)) {
    //         return $next($request);
    //     }
    //     return redirect('/');
    // }
}

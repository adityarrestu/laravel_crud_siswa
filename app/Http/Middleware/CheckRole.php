<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $roles = array_slice(func_get_args(), 2);

        foreach ($roles as $role) {
            $user = \Auth::user()->role;

            if ($user == $role) {
                return $next($request);
            }
        }

        return redirect('/')->with('error', 'Mohon maaf, akses halaman dibatasi');
    }
}

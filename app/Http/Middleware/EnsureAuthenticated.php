<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class EnsureAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        //if ($request->input('token') !== 'my-secret-token') {
          //  return redirect('/mobils');
        //}

        if (!Auth::check()) {
            return redirect()->route('/mobils'); // Arahkan ke halaman login jika belum login
        }
        
        return $next($request);
    }
}

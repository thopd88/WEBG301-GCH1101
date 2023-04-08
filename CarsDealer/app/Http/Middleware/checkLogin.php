<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check login status
        if (Auth::check())
        {
            $user = Auth::user();
            
            if ($user->name !== '' )
            {
                return $next($request);
            }
            else
            {
                return redirect()->route('login');
            }
        } else
        return redirect()->route('login');
    }
}

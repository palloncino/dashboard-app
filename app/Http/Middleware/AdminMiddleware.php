<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('AdminMiddleware: Checking if user is admin.');
        if (Auth::check() && Auth::user()->role == 'admin') {
            Log::info('AdminMiddleware: User is admin.');
            return $next($request);
        }

        Log::warning('AdminMiddleware: User is not admin. Redirecting.');
        return redirect('/');
    }
}

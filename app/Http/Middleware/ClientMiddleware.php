<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ClientMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('ClientMiddleware: Checking if user is client.');
        if (Auth::check() && Auth::user()->role == 'client') {
            Log::info('ClientMiddleware: User is client.');
            return $next($request);
        }

        Log::warning('ClientMiddleware: User is not client. Redirecting.');
        return redirect('/');
    }
}

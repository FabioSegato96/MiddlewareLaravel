<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PrimeiroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::debug('Passou pelo PrimeiroMiddleware');
        return $next($request);
    }
}

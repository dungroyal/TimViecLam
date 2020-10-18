<?php

namespace App\Http\Middleware;

use Closure;

class AssignGuard
{
    public function handle($request, Closure $next, $guard = null)
    {
        if($guard != null)
            auth()->shouldUse($guard);
        return $next($request);
    }
}
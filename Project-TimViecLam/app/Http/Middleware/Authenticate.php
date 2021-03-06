<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        if ($request->is('tvl') || $request->is('tvl/*')) {
            return route('admin.login');
        }

        if ($request->is('employer') || $request->is('employer/*')) {
            return route('employer.login');
        }

        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}

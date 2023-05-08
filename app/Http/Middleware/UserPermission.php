<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserPermission
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $rout = auth()->user()->permission ? 'admin' : 'cashier';
        if (explode('/', $request->path())[0] !== $rout) {
            return redirect($rout);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsCaptainAndOwnsShip
{
    /**
     * Handle an incoming request.
     * TODO add check if owns ship
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->is_captain) {
            return $next($request);
        }
        abort(403, 'Only the captain has access to this part of the ship !');
    }
}

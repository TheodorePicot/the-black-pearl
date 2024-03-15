<?php

namespace App\Http\Middleware;

use App\Models\Ship;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 * Ensure the user is a captain and that he is the captain of the ship in the request.
 *
 */
class EnsureUserIsCaptainAndOwnsShip
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->is_captain && $request->user()->ownsShip()) {
            return $next($request);
        }
        abort(403, 'Only the captain of this ship has access to this part of the vessel !');
    }
}

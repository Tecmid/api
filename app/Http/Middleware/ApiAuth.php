<?php

namespace App\Http\Middleware;

use Closure;
use PHPOpenSourceSaver\JWTAuth\Http\Middleware\BaseMiddleware;

class ApiAuth extends BaseMiddleware
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next): mixed
    {
        try {
            auth()->userOrFail();
        } catch (\Exception $e) {
            return response()->json('Unauthorized', 401);
        }

        return $next($request);
    }
}
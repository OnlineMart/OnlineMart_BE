<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;

class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request                                       $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        try {
            JWTAuth::parseToken()->authenticate();

        } catch (Exception $e) {
            if($e instanceof TokenInvalidException) {
                return jsonResponse(null, 400, 'Token is Invalid');
            } else if($e instanceof TokenExpiredException) {
                return jsonResponse(null, 401, 'Token is Expired');
            } else if($e instanceof TokenBlacklistedException) {
                return jsonResponse(null, 403, 'Token is Blacklisted');
            } else {
                return jsonResponse(null, 404, 'Authorization Token not found');
            }
        }

        return $next($request);
    }
}

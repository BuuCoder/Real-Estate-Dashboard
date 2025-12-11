<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiKey
{
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('X-API-Key');
        $validKey = config('services.api.public_key');

        if (empty($validKey)) {
            return response()->json([
                'success' => false,
                'message' => 'API key not configured on server'
            ], 500);
        }

        if (empty($apiKey) || $apiKey !== $validKey) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid or missing API key'
            ], 401);
        }

        return $next($request);
    }
}

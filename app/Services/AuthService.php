<?php

namespace App\Services;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\JsonResponse;

class AuthService
{
    /**
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function authenticate(AuthRequest $request): JsonResponse
    {
        if (!$token = auth()->setTTL(180)->attempt($request->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithToken($token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL()
        ]);
    }
}

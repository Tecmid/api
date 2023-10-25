<?php

namespace App\Services;

use App\Http\Requests\AuthRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'user' => Auth::user(),
        ]);
    }

    /**
     * Get user info by token
     * 
     * @return Model
     */
    public function getUserByToken(): Model
    {
        return auth()->user();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\AuthService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class AuthController extends TecmidController
{
    public function __construct()
    {
        parent::__construct(new AuthService());
    }

    /**
     * Generate token
     * 
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function authenticate(AuthRequest $request): JsonResponse
    {
        return $this->service->authenticate($request);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(): JsonResponse
    {
        return $this->service->respondWithToken(auth()->refresh());
    }

    /**
     * Check credentials and do login
     * 
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function login(AuthRequest $request): JsonResponse
    {
        return $this->service->login($request);
    }

    /**
     * Get user info by token
     * 
     * @return Model
     */
    public function getUserByToken(): Model
    {
        return $this->service->getUserByToken();
    }
}

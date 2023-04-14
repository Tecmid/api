<?php

namespace App\Http\Controllers;

use App\Services\AppointmentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppointmentController extends TecmidController
{
    public function __construct()
    {
        parent::__construct(new AppointmentService());
    }

    /**
     * Insert data on database
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $request->validate([
            'doctor_id' => 'integer|required'
        ]);

        return parent::create($request);
    }
}

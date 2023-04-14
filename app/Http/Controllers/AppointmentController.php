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
}

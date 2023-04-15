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
     * @param int $appointmentId
     */
    public function getAppointment(int $appointmentId)
    {        
        return $this->service->getById($appointmentId);        
    }

    /**
     * @param int $appointmentId
     * @param Request $request
     */
    public function update(int $appointmentId, Request $request)
    {        
        $this->service->update($appointmentId, $request);        
    }

    /**
     * @param int $appointmentId
     */
    public function delete(int $appointmentId)
    {        
        $this->service->delete($appointmentId);        
    }
}

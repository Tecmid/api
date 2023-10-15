<?php

namespace App\Http\Controllers;

use App\Services\AppointmentService;

class AppointmentController extends TecmidController
{
    public function __construct()
    {
        $this->itemDomain = 'appointmentId';
        parent::__construct(new AppointmentService());
    }

    public function getAppointmentsByDoctorId($doctorId)
    {
        return $this->service->getAppointmentsByDoctorId($doctorId);
    }
}

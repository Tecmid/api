<?php

namespace App\Repositories;

use App\Models\Appointment;

class AppointmentRepository extends TecmidRepository
{
    public function __construct()
    {
        parent::__construct(new Appointment());
    }

    public function getAppointmentsByDoctorId($doctorId)
    {
        return $this->model::where('doctor_id', $doctorId)->get();
    }
}

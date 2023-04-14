<?php

namespace App\Repositories;

use App\Models\Appointment;

class AppointmentRepository extends TecmidRepository
{
    public function __construct()
    {
        parent::__construct(new Appointment());
    }
}

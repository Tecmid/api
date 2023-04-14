<?php

namespace App\Services;

use App\Repositories\AppointmentRepository;

class AppointmentService extends TecmidService
{
    public function __construct()
    {
        parent::__construct(new AppointmentRepository());
    }
}

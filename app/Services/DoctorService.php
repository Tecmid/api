<?php

namespace App\Services;

use App\Repositories\DoctorRepository;

class DoctorService extends TecmidService
{
    public function __construct()
    {
        parent::__construct(new DoctorRepository());
    }
}

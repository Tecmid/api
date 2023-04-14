<?php

namespace App\Repositories;

use App\Models\Doctor;

class DoctorRepository extends TecmidRepository
{
    public function __construct()
    {
        parent::__construct(new Doctor());
    }
}

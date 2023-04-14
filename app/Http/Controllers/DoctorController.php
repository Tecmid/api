<?php

namespace App\Http\Controllers;

use App\Services\DoctorService;

class DoctorController extends TecmidController
{
    public function __construct()
    {
        parent::__construct(new DoctorService());
    }
}

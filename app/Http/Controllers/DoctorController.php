<?php

namespace App\Http\Controllers;

use App\Services\DoctorService;
use Illuminate\Http\Request;

class DoctorController extends TecmidController
{
    public function __construct()
    {
        $this->itemDomain = 'doctorId';
        parent::__construct(new DoctorService());
    }
}

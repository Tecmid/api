<?php

namespace App\Http\Controllers;

use App\Services\DoctorService;
use Illuminate\Http\Request;

class DoctorController extends TecmidController
{
    public function __construct()
    {
        parent::__construct(new DoctorService());
    }

    /**
     * @param int $doctorId
     * @param Request $request
     */
    public function update(int $doctorId, Request $request)
    {        
        $this->service->update($doctorId, $request);        
    }

    /**
     * @param int $doctorId
     */
    public function delete(int $doctorId)
    {        
        $this->service->delete($doctorId);        
    }
}

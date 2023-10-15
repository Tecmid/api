<?php

namespace App\Services;

use App\Repositories\AppointmentRepository;
use Illuminate\Http\Request;

class AppointmentService extends TecmidService
{
    public function __construct()
    {
        parent::__construct(new AppointmentRepository());
    }

    /**
     * Insert data on database
     * 
     * @param Request $request
     */
    public function create(Request $request)
    {
        $request->validate([
            'doctor_id' => 'integer|required',
            'patient_id' => 'integer|required',
            'date' => 'required',
            'status' => 'string|required',
            'payment_status' => 'required'
        ]);

        return parent::create($request);
    }

    /**
     * Get appointments by doctorId
     * 
     * @param int $doctorId
     */
    public function getAppointmentsByDoctorId($doctorId)
    {
        return $this->repository->getAppointmentsByDoctorId($doctorId);
    }
}

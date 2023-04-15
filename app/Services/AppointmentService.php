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
            'doctor_id' => 'integer|required'
        ]);

        return parent::create($request);
    }

    /**
     * Insert data on database
     * 
     * @param int $appointmentId
     * @param Request $request
     */
    public function update(int $appointmentId, Request $request)
    {
        return $this->repository->update(
            $appointmentId, 
            $request->toArray()
        );
    }
}

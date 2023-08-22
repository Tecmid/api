<?php

namespace App\Services;

use App\Repositories\AnamneseRepository;
use Illuminate\Http\Request;

class AnamneseService extends TecmidService
{
    public function __construct()
    {
        parent::__construct(new AnamneseRepository());
    }

    /**
     * Insert data on database
     * 
     * @param Request $request
     */
    public function createOrUpdate(Request $request)
    {
        $request->validate([
            'patient_id' => 'integer|required'
        ]);

        return $this->repository->createOrUpdate($request->toArray());
    }
}

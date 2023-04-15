<?php

namespace App\Services;

use App\Repositories\DoctorRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorService extends TecmidService
{
    public function __construct()
    {
        parent::__construct(new DoctorRepository());
    }

    /**
     * Insert data on database
     * 
     * @param Request $request
     */
    public function create(Request $request)
    {
        $this->request = $request;
        $this->validateCreateData();
        $this->generatePassword();

        return parent::create($this->request);
    }

    /**
     * Validate data from create payload
     * 
     * @return void
     */
    private function validateCreateData(): void
    {
        $this->request->validate([
            'name' => 'required',
            'cpf' => 'integer|required',
            'email' => 'email|required',
            'password' => 'required',
            'phone' => 'required',
            'address_street' => 'required',
            'address_number' => 'required',
            'address_postal_code' => 'required',
            'address_neighborhood' => 'required',
            'address_city' => 'required',
            'address_state' => 'required',
            'address_country' => 'required',
        ]);
    }

    /**
     * Generate hash from password
     * 
     * @return void
     */
    private function generatePassword(): void
    {
        $this->request['password'] = Hash::make($this->request['password']);
    }

    /**
     * Insert data on database
     * 
     * @param int $doctorId
     * @param Request $request
     */
    public function update(int $doctorId, Request $request)
    {
        return $this->repository->update(
            $doctorId, 
            $request->toArray()
        );
    }
}

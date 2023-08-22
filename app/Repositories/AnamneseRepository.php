<?php

namespace App\Repositories;

use App\Models\Anamnese;

class AnamneseRepository extends TecmidRepository
{
    public function __construct()
    {
        parent::__construct(new Anamnese());
    }

    public function createOrUpdate(array $data)
    {
        return $this->model::updateOrCreate([
            'appointment_id' => $data['appointment_id'],
            'patient_id' => $data['patient_id'],
        ], $data);
    }
}

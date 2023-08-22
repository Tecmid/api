<?php

namespace App\Repositories;

use App\Models\Anamnese;

class AnamneseRepository extends TecmidRepository
{
    public function __construct()
    {
        parent::__construct(new Anamnese());
    }

    public function createOrUpdate(array $data, int $anamneseId = null)
    {
        return $this->model::updateOrCreate([
            'id' => $anamneseId,
        ], $data);
    }
}

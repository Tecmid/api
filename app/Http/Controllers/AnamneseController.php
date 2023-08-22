<?php

namespace App\Http\Controllers;

use App\Services\AnamneseService;

class AnamneseController extends TecmidController
{
    public function __construct()
    {
        $this->itemDomain = 'anamneseId';
        parent::__construct(new AnamneseService());
    }

    public function createOrUpdate()
    {
        return response()->json($this->service->createOrUpdate(request()), 201);
    }
}

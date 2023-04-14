<?php

namespace App\Services;

use App\Repositories\TecmidRepository;

abstract class TecmidService
{
    public $repository;

    public function __construct(TecmidRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Insert data on database
     */
    public function create()
    {
        dd('está funcionando');
    }
}

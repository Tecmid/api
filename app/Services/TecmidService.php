<?php

namespace App\Services;

abstract class TecmidService
{
    public $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    /**
     * Insert data on database
     * 
     * @param array $request
     */
    public function create(array $data)
    {
        return $this->repository->create($data);
    }
}

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
     */
    public function create()
    {
        dd('está funcionando');
    }
}

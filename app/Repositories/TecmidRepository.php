<?php

namespace App\Repositories;

abstract class TecmidRepository
{
    public $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Insert data on table
     * 
     * @param array $data
     * @return array
     */
    public function create(array $data)
    {
        return $this->model::insert($data);
    }
}

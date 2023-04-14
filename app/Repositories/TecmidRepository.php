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
     */
    public function create(array $data)
    {
        return $this->model::insert($data);
    }

    /**
     * Get data by id
     * 
     * @param int $id
     */
    public function getById(int $id)
    {
        return $this->model::find($id);
    }
}

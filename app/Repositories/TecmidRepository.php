<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class TecmidRepository
{
    public $model;

    public function __construct(Model $model)
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

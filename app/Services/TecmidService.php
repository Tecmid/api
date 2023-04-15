<?php

namespace App\Services;

use Illuminate\Http\Request;

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
     * @param Request $request
     */
    public function create(Request $request)
    {
        try {
            return $this->repository->create($request->toArray());
        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage());
        }
    }

    /**
     * Delete data on database
     * 
     * @param int $id
     */
    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}

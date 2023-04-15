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
     * Get data on database by id
     * 
     * @param int $id
     */
    public function getById(int $id)
    {
        try {
            return $this->repository->getById($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            throw new \Exception("ID {$id} not found", 404);
        }
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
     * Update data on database
     * 
     * @param int $id
     * @param Request $request
     */
    public function update(int $id, Request $request)
    {
        return $this->repository->update($id, $request->toArray());
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

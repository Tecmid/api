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
     * Insert data
     * 
     * @param Request $request
     */
    public function create(Request $request)
    {
        return $this->repository->create($request->toArray());
    }

    /**
     * Update data
     * 
     * @param int $id
     * @param Request $request
     */
    public function update(int $id, Request $request)
    {
        return $this->repository->update($id, $request->toArray());
    }

    /**
     * Delete data
     * 
     * @param int $id
     */
    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}

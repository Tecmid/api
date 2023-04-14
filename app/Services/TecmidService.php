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
            return response()->json($this->repository->create($request->toArray()), 201);
        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage());
        }
    }
}

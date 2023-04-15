<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

abstract class TecmidController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public $service;
    public string $itemDomain;
    public Request $request;

    public function __construct($service)
    {
        $this->service = $service;
    }

    /**
     * Insert data on database
     */
    public function create()
    {
        return response()->json($this->service->create(request()), 201);
    }

    /**
     * Update data from database
     */
    public function update()
    {
        $this->service->update(
            request()->route($this->itemDomain), 
            $request
        );        
    }

    /**
     * Get data from database by id
     */
    public function getById()
    {
        $this->service->getById(request()->route($this->itemDomain));
    }

    /**
     * Delete data from database
     */
    public function delete()
    {
        $this->service->delete(request()->route($this->itemDomain));
    }
}

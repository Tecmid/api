<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

abstract class TecmidController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public $service;
    public string $itemDomain;

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
     * Update data
     */
    public function update()
    {
        $this->service->update(
            request()->route($this->itemDomain), 
            request()
        );        
    }

    /**
     * Get data by id
     */
    public function getById()
    {
        return $this->service->getById(request()->route($this->itemDomain));
    }

    /**
     * Delete data
     */
    public function delete()
    {
        $this->service->delete(request()->route($this->itemDomain));
    }
}

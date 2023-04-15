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

    public function __construct($service)
    {
        $this->service = $service;
    }

    /**
     * Insert data on database
     * 
     * @param Request $request
     */
    public function create(Request $data)
    {
        try {
            $this->service->create($data);
            return response()->json([], 201);
        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage());
        }
    }
}

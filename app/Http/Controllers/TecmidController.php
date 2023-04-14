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
            return response()->json($this->service->create($data->toArray()));
        } catch (\Throwable $th) {
            return response()->json([
                'error' => true,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}

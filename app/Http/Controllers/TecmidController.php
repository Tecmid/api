<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class TecmidController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    /**
     * Insert data on database
     */
    public function create()
    {
        return $this->service->create();
    }
}

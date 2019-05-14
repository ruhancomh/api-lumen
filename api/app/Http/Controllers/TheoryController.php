<?php

namespace App\Http\Controllers;

use App\Services\TheoryService;

class TheoryController extends Controller
{

    public function list()
    {

        $service = new TheoryService();

        return $service->findAll();
    }
}

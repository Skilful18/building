<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::all();

        return view('building/index', [
            'services' => $services
        ]);
    }
}

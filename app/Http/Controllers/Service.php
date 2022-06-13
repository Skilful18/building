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

    public function about()
    {
        $services = \App\Models\Service::all();

        return view('building/about', [
            'services' => $services
        ]);
    }

    public function service()
    {
        $services = \App\Models\Service::all();

        return view('building/service', [
            'services' => $services
        ]);
    }

    public function price()
    {
        $services = \App\Models\Service::all();

        return view('building/price', [
            'services' => $services
        ]);
    }

    public function specialOffers()
    {
        $services = \App\Models\Service::all();

        return view('building/special-offers', [
            'services' => $services
        ]);
    }

    public function articles()
    {
        $services = \App\Models\Service::all();

        return view('building/articles', [
            'services' => $services
        ]);
    }

    public function contacts()
    {
        $services = \App\Models\Service::all();

        return view('building/contacts', [
            'services' => $services
        ]);
    }
}

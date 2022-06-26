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

    public function construction()
    {
        $services = \App\Models\Service::all();

        return view('building/service/construction', [
            'services' => $services
        ]);
    }

    public function reconstruction()
    {
        $services = \App\Models\Service::all();

        return view('building/service/reconstruction', [
            'services' => $services
        ]);
    }

    public function extensions()
    {
        $services = \App\Models\Service::all();

        return view('building/service/extensions', [
            'services' => $services
        ]);
    }

    public function decoration()
    {
        $services = \App\Models\Service::all();

        return view('building/service/decoration', [
            'services' => $services
        ]);
    }

    public function roof()
    {
        $services = \App\Models\Service::all();

        return view('building/service/roof', [
            'services' => $services
        ]);
    }

    public function foundation()
    {
        $services = \App\Models\Service::all();

        return view('building/service/foundation', [
            'services' => $services
        ]);
    }

    public function warming()
    {
        $services = \App\Models\Service::all();

        return view('building/service/warming', [
            'services' => $services
        ]);
    }

    public function heating()
    {
        $services = \App\Models\Service::all();

        return view('building/service/heating', [
            'services' => $services
        ]);
    }

    public function electrician()
    {
        $services = \App\Models\Service::all();

        return view('building/service/electrician', [
            'services' => $services
        ]);
    }

    public function waterSystem()
    {
        $services = \App\Models\Service::all();

        return view('building/service/water-system', [
            'services' => $services
        ]);
    }
}

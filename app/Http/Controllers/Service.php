<?php

namespace App\Http\Controllers;

use http\Url;
use Illuminate\Http\Request;

class Service extends Controller
{
    public function index()
    {
        $services = \App\Service::all();

        return view('building/index', [
            'services' => $services
        ]);
    }

    public function about()
    {
        $services = \App\Service::all();

        return view('building/about', [
            'services' => $services
        ]);
    }

    public function service()
    {
        $services = \App\Service::all();

        return view('building/service', [
            'services' => $services
        ]);
    }

    public function price()
    {
        $services = \App\Service::all();

        return view('building/price', [
            'services' => $services
        ]);
    }

    public function specialOffers()
    {
        $services = \App\Service::all();

        return view('building/special-offers', [
            'services' => $services
        ]);
    }

    public function articles()
    {
        $services = \App\Service::all();

        return view('building/articles', [
            'services' => $services
        ]);
    }

    public function contacts()
    {
        $services = \App\Service::all();

        return view('building/contacts', [
            'services' => $services
        ]);
    }

    /*public function construction()
    {
        $services = \App\Service::all();

        return view('building/service/construction', [
            'services' => $services
        ]);
    }

    public function reconstruction()
    {
        $services = \App\Service::all();

        return view('building/service/reconstruction', [
            'services' => $services
        ]);
    }

    public function extensions()
    {
        $services = \App\Service::all();

        return view('building/service/extensions', [
            'services' => $services
        ]);
    }

    public function decoration()
    {
        $services = \App\Service::all();

        return view('building/service/decoration', [
            'services' => $services
        ]);
    }

    public function roof()
    {
        $services = \App\Service::all();

        return view('building/service/roof', [
            'services' => $services
        ]);
    }

    public function foundation()
    {
        $services = \App\Service::all();

        return view('building/service/foundation', [
            'services' => $services
        ]);
    }

    public function warming()
    {
        $services = \App\Service::all();

        return view('building/service/warming', [
            'services' => $services
        ]);
    }

    public function waterSystem()
    {
        $services = \App\Service::all();

        return view('building/service/water-system', [
            'services' => $services
        ]);
    }

    public function heating()
    {
        $services = \App\Service::all();

        return view('building/service/heating', [
            'services' => $services
        ]);
    }*/

    public function electrician()
    {
        $services = \App\Service::all();

        return view('building/service/electrician', [
            'services' => $services
        ]);
    }

    public function serviceOne(Request $request)
    {
        $services = \App\Service::all();

        return view('building/service/service-page', [
            'services' => $services
        ]);

    }

    public function serviceAll()
    {
        $services = \App\Service::all();
        dd($services);
    }
}

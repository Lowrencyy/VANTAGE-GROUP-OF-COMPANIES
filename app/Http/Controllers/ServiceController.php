<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Show single service
    public function show(Service $service)
    {
        return view('main.service', compact('service'));
    }

    // Show all services (search page)
    public function search()
    {
        return view('main.services-all', [
            'heading'  => 'Latest Services',
            'services' => Service::all(),
        ]);
    }
}

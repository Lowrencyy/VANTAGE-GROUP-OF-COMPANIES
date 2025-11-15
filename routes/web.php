<?php

use App\Models\Service;
use App\Models\Objective;
use Illuminate\Support\Facades\Route;


// get all objectives
Route::get('/', function () {
    return view('home', [
        'heading'    => 'Latest Objectives',
        'objectives' => Objective::all(),
        'services' => Service::all(),
    ]);
});

// get single objective
Route::get('/objectives/{id}', function ($id) {
    return view('objective', [
        'objective' => Objective::findOrFail($id),
    ]);
});




// services single (DETAIL PAGE)
Route::get('/services/{id}', function ($id) {
    return view('service', [
        'service' => Service::findOrFail($id),
    ]);
});

// CRUD FOR BANNER 

// CRUD FOR FOOTER 

// CRUD FOR MISSION & VISION 

// CRUD FOR SERVICES 

// CRUD FOR CONTACT 

// CRUD FOR WHYCHOOSE 


// CRUD FOR USER 



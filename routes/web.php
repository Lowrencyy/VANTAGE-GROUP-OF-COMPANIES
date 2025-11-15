<?php

use Illuminate\Support\Facades\Route;
use App\Models\Objective;


// get all objectives
Route::get('/', function () {
    return view('objectives', [
        'heading' => 'Latest Objectives',
        'objectives' => Objective::all(),
    ]);
});

// get single objective
Route::get('/objectives/{id}', function ($id) {
    return view('objective', [
        'objective' => Objective::find($id),
    ]);
});




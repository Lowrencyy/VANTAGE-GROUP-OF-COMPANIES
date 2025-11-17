<?php

use App\Http\Controllers\ObjectiveController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// main landing page 
Route::get('/', [ObjectiveController::class, 'index'])->name('objectives.index');

Route::get('/objectives', [ObjectiveController::class, 'search'])
     ->name('objectives.search');

Route::get('/objectives/{objective}', [ObjectiveController::class, 'show'])
     ->name('objectives.show');

Route::get('/services', [ServiceController::class, 'search'])
     ->name('services.search');

Route::get('/services/{service}', [ServiceController::class, 'show'])
     ->name('services.show');



// common resources routes

// index - show all data 
// create - show  a single data 
// create - show a form to create a data 
// store - store a data 
// edit - show form to edit data 
// update - update data 
// destroy - destroy data / delete




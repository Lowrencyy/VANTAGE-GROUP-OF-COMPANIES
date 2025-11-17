<?php

namespace App\Providers;

use App\Models\Objective;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class GlobalViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       View::composer('*', function ($view) {
            $view->with('objectives', Objective::all());
            $view->with('services', Service::all());
        });
    }
}

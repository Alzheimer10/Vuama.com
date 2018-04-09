<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class ServicesProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // \View::share('ServicesProvider', \App\Models\Service::all()->where('status',1));

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        \Illuminate\Support\Facades\View::share('companyName', 'Devmaster Academy');
    }
}

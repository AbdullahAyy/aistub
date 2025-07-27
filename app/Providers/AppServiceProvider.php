<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // <-- BU OLMALI

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Global paylaşım
        View::share('siteName', 'AI Stub');

        // Belirli bir view için data
        View::composer('layouts.app', function ($view) {
            $view->with('year', date('Y'));
        });
    }
}

<?php

namespace App\Providers;

use App\Models\ContactSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $view->with('contact', ContactSetting::first());
        });
    }
}
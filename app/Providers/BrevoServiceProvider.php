<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\BrevoEmailService;

class BrevoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(BrevoEmailService::class, function ($app) {
            return new BrevoEmailService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
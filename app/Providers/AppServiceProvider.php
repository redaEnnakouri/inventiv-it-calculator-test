<?php

namespace App\Providers;

use App\Services\Calculator\CalculatorInterface;
use App\Services\Calculator\CalculatorService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(CalculatorInterface::class, CalculatorService::class);

    }
}

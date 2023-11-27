<?php

namespace App\Providers;

use App\Services\DeferViteServices;
use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        $this->app->bind(Vite::class, DeferViteServices::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
    }
}

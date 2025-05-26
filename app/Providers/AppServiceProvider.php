<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model; // Добавьте эту строку

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}

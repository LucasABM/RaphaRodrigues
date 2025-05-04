<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;
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
        // Registra as rotas de API em routes/api.php
        Route::prefix('api')
             ->middleware('api')
             ->group(base_path('routes/api.php'));


        Route::middleware('web')
             ->group(base_path('routes/web.php'));
    }
}

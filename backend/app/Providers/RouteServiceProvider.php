<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->routes(function () {
            // suas rotas API
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));

            // suas rotas web (caso queira)
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}

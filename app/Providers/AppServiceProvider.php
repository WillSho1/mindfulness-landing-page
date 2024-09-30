<?php

namespace App\Providers;

use App\Http\Middleware\ForceHttps;
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
    public function boot()
    {
        if (config('app.env') === 'production') {
            \URL::forceScheme('https');
        }

        $this->app['router']->pushMiddlewareToGroup('web', ForceHttps::class);
    }
}

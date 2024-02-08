<?php

namespace Sk\SparrowSms;

use Illuminate\Support\ServiceProvider;

class SparrowSmsServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'sparrowSms');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/sparrowSms.php', 'sparrowSms');
        $this->publishes([
            __DIR__ . '/config/sparrowSms.php' => config_path('sparrowSms.php'),
            __DIR__.'/resources/views' => resource_path('views/vendor/sparrowSms'),

        ]);
    }
}

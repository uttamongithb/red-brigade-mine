<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // Register global class aliases for helpers namespaced under App\Helpers
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Helpers', \App\Helpers\Helpers::class);
        $loader->alias('Htmlhelpers', \App\Helpers\Htmlhelpers::class);
        $loader->alias('Sanitizer', \App\Helpers\Sanitizer::class);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}

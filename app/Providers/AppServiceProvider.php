<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $host = request()->getHost();
        $isLocalHost = in_array($host, ['127.0.0.1', 'localhost'], true)
            || str_ends_with($host, '.test');

        if (config('app.env') === 'production' && ! $isLocalHost) {
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

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\FormBuilder;
use Illuminate\Foundation\AliasLoader;
use App\Facades\Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('form', function ($app) {
            return new FormBuilder();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        AliasLoader::getInstance()->alias('Form', Form::class);
    }
}

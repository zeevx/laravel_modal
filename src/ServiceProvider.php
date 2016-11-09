<?php

namespace Leantony\Modal;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources', 'modal');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/leantony/modal'),
            __DIR__ . '/resources/js' => resource_path('views/vendor/leantony/modal'),
        ]);

        $this->publishes([
            __DIR__ . '/src/resources/js' => public_path('vendor/leantony/modal'),
        ], 'public');
    }
}
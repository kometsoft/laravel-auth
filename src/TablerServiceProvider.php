<?php

namespace Kometsoft\Tabler;

use Illuminate\Support\ServiceProvider;

class TablerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/laravel-tabler.php',
            'laravel-tabler'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'laravel-tabler');

        $this->publishes([
            // Config file
            __DIR__ . '/config/laravel-tabler.php' => config_path('laravel-tabler.php'),

            // Assets
            __DIR__ . '/../stubs/resources/sass' => resource_path('sass'),
            __DIR__ . '/../stubs/resources/js' => resource_path('js'),
            __DIR__ . '/../stubs/vite.config.js' => base_path('vite.config.js'),
            __DIR__ . '/../stubs/public/vendor' => public_path('vendor'),

            // Stubs
            __DIR__ . '/../stubs/resources/views' => resource_path('views'),
            __DIR__ . '/../stubs/lang' => lang_path(),
            __DIR__ . '/../stubs/stubs' => base_path('stubs'),
        ], 'laravel-tabler');
    }
}

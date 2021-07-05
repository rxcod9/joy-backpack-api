<?php

namespace Joy\BackpackApi;

use Illuminate\Support\ServiceProvider;

class BackpackApiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'joy-backpack-api');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'joy-backpack-api');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/backpack-api.php', 'joy-backpack-api');

        // Register the service the package provides.
        $this->app->singleton('joy-backpack-api', function ($app) {
            return new BackpackApi;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['joy-backpack-api'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/backpack-api.php' => config_path('joy-backpack-api.php'),
        ], 'joy-backpack-api.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/joy-backpack-api'),
        ], 'backpack-api.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/joy-backpack-api'),
        ], 'backpack-api.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/joy-backpack-api'),
        ], 'backpack-api.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}

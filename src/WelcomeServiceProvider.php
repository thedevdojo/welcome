<?php

namespace Devdojo\Welcome;

use Illuminate\Support\ServiceProvider;

class WelcomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__ . '/../routes/welcome.php';
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'devdojowelcome');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->publishes([__DIR__.'/../publishable/assets' => public_path('assets')]);
    }
}

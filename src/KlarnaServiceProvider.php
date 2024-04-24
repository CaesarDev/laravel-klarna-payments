<?php

namespace Caesardev\Klarna;

use Caesardev\Klarna\Contracts\KlarnaHPPInterface;
use Illuminate\Support\ServiceProvider;


class KlarnaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Bind KlarnaHPPInterface to KlarnaHPPService
        $this->app->bind(KlarnaHPPInterface::class, KlarnaHPP::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish the Klarna configuration file
        $this->publishes([
            __DIR__.'/../config/klarna.php' => config_path('klarna.php'),
        ], 'config');

        // Optionally load routes, views, etc. if needed for your package
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'klarna');
    }
}

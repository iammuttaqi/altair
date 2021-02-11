<?php

namespace App\Modules\Companyprofile\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'companyprofile');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'companyprofile');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'companyprofile');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}

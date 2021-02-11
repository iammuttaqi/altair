<?php

namespace App\Modules\Subcategory\Providers;

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
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'subcategory');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'subcategory');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'subcategory');
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

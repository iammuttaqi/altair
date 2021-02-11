<?php

namespace App\Modules\Furthersubcategory\Providers;

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
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'furthersubcategory');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'furthersubcategory');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'furthersubcategory');
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

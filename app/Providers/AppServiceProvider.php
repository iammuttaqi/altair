<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
//Models
use App\Models\Users;
use App\Models\CompanyProfile;
use App\Models\Modules;
use App\Models\Category; 
use App\Models\SubCategory;
use App\Models\FurtherSubCategory;
use DB;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

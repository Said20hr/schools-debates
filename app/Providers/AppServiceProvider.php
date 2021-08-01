<?php

namespace App\Providers;

use App\Models\CRM;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        if (CRM::count() > 0)
        {
            $content = CRM::first();
        }
        else
        {
            $content = new CRM();
        }
        view()->share('content', $content);
    }
}

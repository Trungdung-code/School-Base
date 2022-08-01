<?php

namespace App\Providers;

use Illuminate\Pagination\BootstrapFourPresenter;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class PaginatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        Paginator::presenter(function($paginator) {
//           return new BootstrapFourPresenter($paginator);
//        });
    }
}

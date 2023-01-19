<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
        // Видимо, нужно только для создания индексов в бд
        // https://laravel.com/docs/8.x/migrations#index-lengths-mysql-mariadb
        Schema::defaultStringLength(191);

        // Pagination 
        Paginator::useBootstrap(); 
    }
}

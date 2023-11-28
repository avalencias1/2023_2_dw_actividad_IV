<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //Import Schema Corregir error al ejecutar php artisan migrate
Schema::defaultStringLength(191); //Solved by increasing StringLength correccion de error al ejecutar php artisan migrate


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
        //
        Schema::defaultStringLength(191); //Solved by increasing StringLength correccion de error al ejecutar php artisan migrate    
    }
}

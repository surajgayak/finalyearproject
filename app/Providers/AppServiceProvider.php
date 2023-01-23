<?php

namespace App\Providers;
use App\Models\Upload;
use App\Models\Booking;

use Illuminate\Support\ServiceProvider;
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
        view()->composer('vehicle',function ($view){
            $view->with('vehicle',Upload::all());
        });
       
    }

}
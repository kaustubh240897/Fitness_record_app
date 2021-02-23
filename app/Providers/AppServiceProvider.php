<?php

namespace App\Providers;
use App\t_Tour;
use App\t_Steps;
use App\Observers\t_TourObserver;
use App\Observers\t_StepObserver;
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
        //
        date_default_timezone_set('Asia/Tokyo');
        t_Tour::observe(t_TourObserver::class);
        //t_Steps::observe(t_StepObserver::class);

    }
}

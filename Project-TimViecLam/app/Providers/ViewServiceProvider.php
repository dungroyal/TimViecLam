<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('careers',DB::table('career')->get());
        View::share('city',DB::table('city')->get());

        // view()->composer( 
        //     '*', 'App\Http\ViewComposers\BasicDataComposer',
        // );
    }
}

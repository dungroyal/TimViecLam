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
        View::share('degree',DB::table('degree')->get());
        View::share('experience',DB::table('experience')->get());
        View::share('grade',DB::table('grade')->get());
        View::share('salary',DB::table('salary')->get());
        View::share('type_job',DB::table('type_job')->get());

        // view()->composer( 
        //     '*', 'App\Http\ViewComposers\BasicDataComposer',
        // );
    }
}

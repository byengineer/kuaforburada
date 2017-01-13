<?php

namespace App\Providers;

use App\User;
use Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

            view()->composer('*', function($view)
            {
                if (!Auth::guest()) {
                    $view->with('avatar', User::where('id', Auth::user()->id)->first());
                }

            });

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

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\MenuController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $UserMenu = app('App\Http\Controllers\MenuController')->getUserMenu();

        View::share('usermenu', $UserMenu);
        
        // View()->composer('*', function($view) {
        //     $UserMenu = app('App\Http\Controllers\MenuController')->getUserMenu();
        //     $view()->with('usermenu',$UserMenu);
        // });
    }
}

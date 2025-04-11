<?php

namespace App\Providers;

use App\Models\CustomCode;
use Illuminate\Support\Facades\View;
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
        // Share custom code with all views
        View::composer('*', function ($view) {
            $customCode = CustomCode::first();
            $view->with('customCode', $customCode ?? new CustomCode());
        });
    }
}

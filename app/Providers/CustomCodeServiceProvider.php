<?php

namespace App\Providers;

use App\Models\CustomCode;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CustomCodeServiceProvider extends ServiceProvider
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
        // Share the active custom code with all views
        View::composer('*', function ($view) {
            try {
                $customCode = CustomCode::where('is_active', true)->first();
                $view->with('customCode', $customCode);
            } catch (\Exception $e) {
                // If the table doesn't exist yet (e.g., during migration)
                // or any other error occurs, just continue without custom code
                $view->with('customCode', null);
            }
        });
    }
}

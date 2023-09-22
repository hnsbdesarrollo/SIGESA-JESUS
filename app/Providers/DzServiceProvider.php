<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DzServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        require_once app_path() . '/Helper/DzHelper.php';
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

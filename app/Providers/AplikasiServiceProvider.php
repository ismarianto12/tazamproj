<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AplikasiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . 'Helpers/Aplikasi.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

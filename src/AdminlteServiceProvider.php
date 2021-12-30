<?php


namespace Anam\Adminlte;

use Anam\Adminlte\Console\Commands\CopyAssets;
use Anam\Adminlte\Console\Commands\CopyLayouts;
use Illuminate\Support\ServiceProvider;

class AdminlteServiceProvider extends ServiceProvider
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
        if ($this->app->runningInConsole()) {
            $this->commands([
                CopyAssets::class,
                CopyLayouts::class,
            ]);
        }
    }
}

<?php


namespace Anam\Adminlte;

use Anam\Adminlte\Console\Commands\CopyAssets;
use Anam\Adminlte\Console\Commands\CopyLayouts;
use Illuminate\Support\Facades\Blade;
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
        $this->loadViewsFrom(__DIR__ . '/views', 'admin');

        if ($this->app->runningInConsole()) {
            $this->commands([
                CopyAssets::class,
                CopyLayouts::class,
            ]);
        }
    }

    /**
     * Register the Blade form components.
     *
     * @return $this
     */
    private function registerComponents(): self
    {
        Blade::componentNamespace('Anam\\Adminlte\\View\\Components', 'admin');

        return $this;
    }
}

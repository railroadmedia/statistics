<?php

namespace Railroad\Ecommerce\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class StatisticsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->publishes([
                __DIR__ . '/../../config/statistics.php' => config_path('statistics.php'),
            ]);
    }

    public function register()
    {
        //
    }
}
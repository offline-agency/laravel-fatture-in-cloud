<?php

namespace OfflineAgency\FattureInCloud;

use Illuminate\Support\ServiceProvider;

class FattureInCloudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/fatture-in-cloud.php' => config_path('fatture-in-cloud.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/fatture-in-cloud.php', 'fatture-in-cloud'
        );

        $this->app->singleton('fatture-in-cloud', function () {
            return new FattureInCloud();
        });
    }
}

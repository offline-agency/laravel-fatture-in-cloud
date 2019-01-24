<?php

namespace OfflineAgency\FattureInCloud;

use Illuminate\Support\ServiceProvider;

class FattureInCloudServiceProvider extends ServiceProvider{

    public function boot() {

        $this->publishes([
            __DIR__ . '/../config/fattureincloud.php' => config_path('fattureincloud.php'),
        ], 'config');

    }

    public function register() {

        $this->mergeConfigFrom(
            __DIR__.'/../config/fattureincloud.php', 'fattureincloud'
        );

        $this->app->singleton('fattureincloud', function ($app) {
            return new FattureInCloud();
        });

    }

}
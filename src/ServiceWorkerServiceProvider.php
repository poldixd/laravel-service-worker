<?php

namespace poldixd\ServiceWorker;

use Illuminate\Support\ServiceProvider;

class ServiceWorkerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/service-worker.php',
            'service-worker'
        );

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}

<?php

namespace poldixd\ServiceWorker;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use poldixd\ServiceWorker\View\Components\ServiceWorkerJsComponent;

class ServiceWorkerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/service-worker.php',
            'service-worker'
        );

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        Blade::component('service-worker-js', ServiceWorkerJsComponent::class);
    }
}

<?php

namespace poldixd\ServiceWorker\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as BaseTestCase;
use poldixd\ServiceWorker\ServiceWorkerServiceProvider;

class TestCase extends BaseTestCase
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            ServiceWorkerServiceProvider::class,
        ];
    }
}

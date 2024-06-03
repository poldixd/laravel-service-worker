<?php

namespace poldixd\ServiceWorker\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use poldixd\ServiceWorker\ServiceWorkerServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ServiceWorkerServiceProvider::class,
        ];
    }
}

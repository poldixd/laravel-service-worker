<?php

use Illuminate\Support\Facades\Route;
use poldixd\ServiceWorker\ServiceWorkerController;

Route::get(config('service-worker.service-worker-uri'), ServiceWorkerController::class)->name('service-worker-uri');

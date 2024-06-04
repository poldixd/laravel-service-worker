<?php

use Illuminate\Support\Facades\Route;
use poldixd\ServiceWorker\ServiceWorkerController;

Route::get('/build/service-worker.js', ServiceWorkerController::class);

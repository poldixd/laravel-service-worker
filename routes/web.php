<?php

use Illuminate\Support\Facades\Route;
use poldixd\ServiceWorker\ServiceWorkerController;

Route::get('/service-worker.js', ServiceWorkerController::class);

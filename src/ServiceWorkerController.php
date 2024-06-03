<?php

namespace poldixd\ServiceWorker;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class ServiceWorkerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): Response
    {
        abort_unless(File::exists(config('service-worker.service-worker-js-path')), 404);

        $content = File::get(config('service-worker.service-worker-js-path'));

        return response($content, 200)
            ->withHeaders([
                'Content-Type' => 'application/javascript',
                'Service-Worker-Allowed' => '/',
                'Cache-Control' => 'no-store, no-cache, must-revalidate, proxy-revalidate, max-age=0',
            ]);
    }
}

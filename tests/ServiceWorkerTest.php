<?php

use Illuminate\Support\Facades\Config;

use function Pest\Laravel\get;

beforeEach(fn () => Config::set('service-worker.service-worker-js-path', __DIR__.'/Fixtures/sw.js'));

it('returns a status code 200 on the route', function () {
    get(url('/service-worker.js'))
        ->assertSuccessful()
        ->assertSeeText("alert('Foo Bar');", false);
});

it('has the correct headers', function () {
    get(url('/service-worker.js'))
        ->assertSuccessful()
        ->assertHeader('Content-Type', 'application/javascript')
        ->assertHeader('Service-Worker-Allowed', '/')
        ->assertHeader('Cache-Control', 'max-age=0, must-revalidate, no-cache, no-store, proxy-revalidate, private')
        ->assertSeeText("alert('Foo Bar');", false);
});

it('returns a 404 if js not found', function () {
    Config::set('service-worker.service-worker-js-path', __DIR__.'/Fixtures/missing.js');

    get(url('/service-worker.js'))
        ->assertNotFound();
});

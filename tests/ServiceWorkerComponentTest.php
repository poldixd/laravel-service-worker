<?php

it('renders the service worker js component', function () {
    $component = test()->blade('<x-service-worker-js />');

    expect($component)->toMatchSnapshot();
});

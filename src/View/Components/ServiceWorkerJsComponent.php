<?php

namespace poldixd\ServiceWorker\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceWorkerJsComponent extends Component
{
    public function render(): View|Closure|string
    {
        return <<<'JAVASCRIPT'
        <script>
            if('serviceWorker' in navigator) {
                window.addEventListener('load', () => {
                    navigator.serviceWorker.register('{{ route('service-worker-uri') }}', { scope: '/' })
                })
            }
        </script>
        JAVASCRIPT;
    }
}

<?php

declare(strict_types=1);

namespace Modules\FormX\Providers;

//---- bases ----
use Illuminate\Support\Facades\Blade;
//---- services --
use Modules\FormX\Services\FormXService;
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class FormXServiceProvider.
 */
class FormXServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'formx'; //lower del nome

    public function bootCallback(): void {
        //\Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
        //\Debugbar::addMessage('Another message', 'mylabel');

        FormXService::registerComponents();

        FormXService::registerMacros();

        //Blade::componentNamespace('Modules\FormX\View\Components', 'formx');
    }
}
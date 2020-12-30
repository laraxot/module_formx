<?php

namespace Modules\FormX\Providers;

//---- bases ----
use Illuminate\Support\Facades\Blade;
//---- services --
use Modules\FormX\Services\FormXService;
use Modules\Xot\Providers\XotBaseServiceProvider;

class FormXServiceProvider extends XotBaseServiceProvider {
    protected $module_dir = __DIR__;
    protected $module_ns = __NAMESPACE__;
    public $module_name = 'formx'; //lower del nome

    public function bootCallback() {
        //\Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
        //\Debugbar::addMessage('Another message', 'mylabel');

        FormXService::registerComponents();

        FormXService::registerMacros();

        Blade::componentNamespace(dirname($this->module_ns).'\View\Components', 'formx');
    }
}

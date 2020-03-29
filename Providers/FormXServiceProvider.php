<?php

namespace Modules\FormX\Providers;

//---- bases ----
use Modules\FormX\Services\FormXService;
//---- services --
use Modules\Xot\Providers\XotBaseServiceProvider;

class FormXServiceProvider extends XotBaseServiceProvider {
    protected $module_dir = __DIR__;
    protected $module_ns = __NAMESPACE__;
    public $module_name = 'formx'; //lower del nome

    public function bootCallback() {
        FormXService::registerComponents();
        FormXService::registerMacros();
    }
}

<<<<<<< HEAD
<?php

namespace Modules\FormX\Providers;

//---- bases ----
use Illuminate\Support\Facades\Blade;
//---- services --
use Modules\FormX\Services\FormXService;
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class FormXServiceProvider
 * @package Modules\FormX\Providers
 */
class FormXServiceProvider extends XotBaseServiceProvider {
    /**
     * @var string
     */
    protected string $module_dir = __DIR__;
    /**
     * @var string
     */
    protected string $module_ns = __NAMESPACE__;
    /**
     * @var string
     */
    public string $module_name = 'formx'; //lower del nome

    public function bootCallback():void {
        //\Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
        //\Debugbar::addMessage('Another message', 'mylabel');

        FormXService::registerComponents();

        FormXService::registerMacros();

        Blade::componentNamespace(dirname($this->module_ns).'\View\Components', 'formx');
    }
}
=======
<?php

namespace Modules\FormX\Providers;

//---- bases ----
use Illuminate\Support\Facades\Blade;
//---- services --
use Modules\FormX\Services\FormXService;
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class FormXServiceProvider
 * @package Modules\FormX\Providers
 */
class FormXServiceProvider extends XotBaseServiceProvider {
    /**
     * @var string
     */
    protected string $module_dir = __DIR__;
    /**
     * @var string
     */
    protected string $module_ns = __NAMESPACE__;
    /**
     * @var string
     */
    public string $module_name = 'formx'; //lower del nome

    public function bootCallback():void {
        //\Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
        //\Debugbar::addMessage('Another message', 'mylabel');

        FormXService::registerComponents();

        FormXService::registerMacros();

        Blade::componentNamespace(dirname($this->module_ns).'\View\Components', 'formx');
    }
}
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

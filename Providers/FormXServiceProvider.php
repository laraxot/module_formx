<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
namespace Modules\FormX\Providers;

//---- bases ----
use Illuminate\Support\Facades\Blade;
//---- services --
use Modules\FormX\Services\FormXService;
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
<<<<<<< HEAD
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
=======
 * Class FormXServiceProvider.
 */
class FormXServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'formx'; //lower del nome

    public function bootCallback(): void {
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
        //\Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
        //\Debugbar::addMessage('Another message', 'mylabel');

        FormXService::registerComponents();

        FormXService::registerMacros();

<<<<<<< HEAD
        Blade::componentNamespace(dirname($this->module_ns).'\View\Components', 'formx');
    }
}
=======
        //Blade::componentNamespace('Modules\FormX\View\Components', 'formx');
    }
}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<?php

namespace Modules\FormX\Providers;

//---- bases ----
use Livewire\Livewire;
//---- services --
use Modules\FormX\Http\Livewire\Calendar;
use Modules\FormX\Http\Livewire\Numberer;
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

        $this->registerLivewireComponents();
    }

    public function registerLivewireComponents() {
        if (class_exists("Livewire\Livewire")) {
            Livewire::component($this->module_name.'::calendar', Calendar::class);
            Livewire::component($this->module_name.'::numberer', Numberer::class);
        }
    }
}

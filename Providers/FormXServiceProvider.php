<?php

namespace Modules\FormX\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

//---- bases ----
use Modules\Xot\Providers\XotBaseServiceProvider;
//---- services --
use Modules\FormX\Services\FormXService;

class FormXServiceProvider extends XotBaseServiceProvider{
    protected $module_dir= __DIR__;
    protected $module_ns=__NAMESPACE__;
    public $module_name='formx'; //lower del nome

    public function bootCallback(){
        FormXService::registerComponents();
        FormXService::registerMacros();
    }

}

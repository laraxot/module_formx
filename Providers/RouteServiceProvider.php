<?php

namespace Modules\FormX\Providers;

//--- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider {
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\FormX\Http\Controllers';
    protected $module_dir = __DIR__;
    protected $module_ns = __NAMESPACE__;
}//end class RouteServiceProvider

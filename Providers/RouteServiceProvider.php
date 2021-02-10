<?php

namespace Modules\FormX\Providers;

//--- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Class RouteServiceProvider
 * @package Modules\FormX\Providers
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider {
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected string $moduleNamespace = 'Modules\FormX\Http\Controllers';
    /**
     * The module directory.
     *
     * @var string
     */
    protected string $module_dir = __DIR__;
    /**
     * The module namespace.
     *
     * @var string
     */
    protected string $module_ns = __NAMESPACE__;
}//end class RouteServiceProvider

<?php

declare(strict_types=1);

namespace Modules\FormX\Providers;

//--- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Class RouteServiceProvider.
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider {
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\FormX\Http\Controllers';
    /**
     * The module directory.
     */
    protected string $module_dir = __DIR__;
    /**
     * The module namespace.
     */
    protected string $module_ns = __NAMESPACE__;
}//end class RouteServiceProvider

<?php

declare(strict_types=1);

namespace Modules\FormX\Providers;

//---- bases ----
//---- services --
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Services\CollectiveService;

/**
 * Class FormXServiceProvider.
 */
class FormXServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'formx'; //lower del nome

    public function bootCallback(): void {
        CollectiveService::registerComponents(
            $this->module_dir.'/../Resources/views/collective/fields',
            '',
            $this->module_name.'::',
        );

        CollectiveService::registerMacros($this->module_dir.'/../Macros');
    }
}
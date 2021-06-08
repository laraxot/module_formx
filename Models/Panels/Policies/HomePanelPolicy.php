<?php

declare(strict_types=1);

namespace Modules\FormX\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class HomePanelPolicy.
 */
class HomePanelPolicy extends XotBasePanelPolicy {
    public function fullcalendar(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function test(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function fillplaces(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
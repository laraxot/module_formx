<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
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
<<<<<<< HEAD
=======

    public function fillplaces(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function fillevents(UserContract $user, PanelContract $panel): bool {
        return true;
    }
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
}
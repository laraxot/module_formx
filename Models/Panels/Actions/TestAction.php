<<<<<<< HEAD
<?php

namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
//-------- services --------
//-------- bases -----------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class TestAction.
 */
class TestAction extends XotBasePanelAction {
    public bool $onContainer = true; //onlyContainer

    public string $icon = '<i class="fas fa-campground"></i>';

    public function handle() {
        return $this->panel->view();
    }
=======
<?php

namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
//-------- services --------
//-------- bases -----------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class TestAction.
 */
class TestAction extends XotBasePanelAction {
    public bool $onContainer = true; //onlyContainer

    public string $icon = '<i class="fas fa-campground"></i>';

    public function handle() {
        return $this->panel->view();
    }
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
}
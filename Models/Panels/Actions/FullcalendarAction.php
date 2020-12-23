<?php

namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
//-------- services --------
//-------- bases -----------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

class FullcalendarAction extends XotBasePanelAction {
    public $onContainer = true; //onlyContainer
    public $icon = '<i class="fas fa-sync"></i>';

    public function handle() {
        return $this->panel->view();
    }
}

<?php

namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
//-------- services --------
//-------- bases -----------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class FullcalendarAction
 * @package Modules\FormX\Models\Panels\Actions
 */
class FullcalendarAction extends XotBasePanelAction {
    /**
     * @var bool
     */
    public bool $onContainer = true; //onlyContainer
    /**
     * @var string
     */
    public string $icon = '<i class="fas fa-sync"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        return $this->panel->view();
    }
}

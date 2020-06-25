<?php

namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
use Modules\FormX\Models\Input;
//-------- services --------
use Modules\FormX\Services\FormXService;
//-------- bases -----------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

class SyncInputs extends XotBasePanelAction {
    public $onContainer = true; //onlyContainer
    public $icon = '<i class="fas fa-sync"></i>';
    public $name = 'sync_inputs';

    public function handle() {
        $comps = FormXService::getComponents();
        foreach ($comps as $comp) {
            $parz = ['type' => $comp->name];
            $row = Input::firstOrCreate($parz);
        }
        //return 'preso';
    }
}

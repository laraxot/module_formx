<?php

namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
use Modules\FormX\Models\Input;
//-------- services --------
use Modules\FormX\Services\FormXService;
//-------- bases -----------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class SyncInputs.
 */
class SyncInputs extends XotBasePanelAction {
    public bool $onContainer = true; //onlyContainer

    public string $icon = '<i class="fas fa-sync"></i>';
    /**
     * @var string
     */
    public ?string $name = 'sync_inputs';

    public function handle() {
        $comps = FormXService::getComponents();
        foreach ($comps as $comp) {
            $parz = ['type' => $comp->name];
            $row = Input::query()->firstOrCreate($parz);
        }
        //return 'preso';
    }
}
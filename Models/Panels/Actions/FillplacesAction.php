<?php

declare(strict_types=1);

namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
use Modules\Blog\Models\Place;
//-------- services --------
use Modules\FormX\Models\Input;
//-------- bases -----------
use Modules\FormX\Services\FormXService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class SyncInputs.
 */
class FillplacesAction extends XotBasePanelAction {
    public bool $onContainer = true; //onlyContainer

    public string $icon = '<i class="fas fa-sync"></i>';

    public function handle() {
        /*
        $comps = FormXService::getComponents();
        foreach ($comps as $comp) {
            $parz = ['type' => $comp->name];
            $row = Input::query()->firstOrCreate($parz);
        }
        */
        Place::whereRaw('1=1')->delete();
        $rows = Place::factory()->count(10)->create();

        $rows = Place::get();
        dddx($rows);

        return $rows->count();
    }
}
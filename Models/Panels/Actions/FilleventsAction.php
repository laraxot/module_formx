<?php

declare(strict_types=1);

namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
use Modules\Blog\Models\Event;
//-------- services --------
//-------- bases -----------
use Modules\FormX\Models\Input;
use Modules\FormX\Services\FormXService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class SyncInputs.
 */
class FilleventsAction extends XotBasePanelAction {
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
        $rows = Event::factory()->count(10)->create();

        $rows = Event::get();

        return $rows->count();
    }
}

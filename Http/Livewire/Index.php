<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Modules\FormX\Services\ColumnService;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

//use Illuminate\Support\Carbon;

/**
 * Modules\FormX\Http\Livewire\Index.
 *
 * @property XotBasePanel $panel
 */
class Index extends XotBaseTableComponent {
    public array $index_fields = [];

    public array $route_params = [];

    public array $data = [];

    public function mount(): void {
        $this->route_params = optional(request()->route())->parameters();
        $this->data = request()->all();
        $this->setTableProperties();
        $this->sort_attribute = $this->panel->getRow()->getKeyName();
    }

    public function getPanelProperty():PanelContract {
        return PanelService::getByParams($this->route_params);
    }

    public function query():Builder {
        return $this->panel->rows($this->data);
    }

    public function columns(): array {
        $columns = [];
        $this->index_fields = $this->panel->getFields(['act'=>'index']);

        foreach ($this->index_fields as $field) {
            if (is_array($field)) {
                $field = (object) $field;
            }
            $col = ColumnService::make($field->name)->type($field->type);
            if (in_array($field->type, ['Id', 'String', 'Text', 'Integer'])) {
                $col->sortable()->searchable();
            }

            $columns[] = $col;
        }

        return $columns;
    }
}

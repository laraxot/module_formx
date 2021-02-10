<?php

namespace Modules\FormX\Http\Livewire;

use Modules\FormX\Services\ColumnService;
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

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function mount() {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->setTableProperties();
        $this->sort_attribute = $this->panel->row->getKeyName();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response|mixed|null
     */
    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder|\Modules\LU\Models\User|null
     */
    public function query() {
        return $this->panel->rows($this->data);
    }

    /**
     * @return array
     */
    public function columns() {
        $columns = [];
        $this->index_fields = $this->panel->indexFields();

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
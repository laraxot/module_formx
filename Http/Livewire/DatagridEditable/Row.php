<?php

namespace Modules\FormX\Http\Livewire\DatagridEditable;

use Illuminate\Support\Str;
use Modules\FormX\Services\FieldService;
use Modules\FormX\Traits\HandlesArrays;
use Modules\FormX\Traits\UploadsFiles;
use Modules\Xot\Http\Livewire\XotBaseComponent;
use Modules\Xot\Services\PanelService;

class Row extends XotBaseComponent {
    use UploadsFiles;
    use HandlesArrays;
    public $index_fields = [];
    public $route_params = [];
    public $in_admin;
    public $row;
    public $index;
    //public $fields;
    public $form_data = [];

    public function mount($row, $index) {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->in_admin = inAdmin();
        $this->route_params['in_admin'] = $this->in_admin;

        $this->row = $row;
        $this->index = $index;
        //$this->fields = $fields;
        $this->setFormProperties($row);
    }

    public function render() {
        $view = $this->getView();
        $view_params = [
            'view' => $view,
            'form_data' => $this->form_data,
            'fields' => $this->fields(),
        ];

        return view($view, $view_params);
    }

    public function fields() {
        $this->panel_fields = $this->panel->editFields();

        $fields = [];
        foreach ($this->panel_fields as $field) {
            $fields[] = FieldService::make($field->name)->type($field->type);
        }

        return $fields;
    }

    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    public function setFormProperties($model = null) {
        //$this->model = $model;
        if ($model) {
            $this->form_data = $model->toArray();
        }

        foreach ($this->fields() as $field) {
            if (! isset($this->form_data[$field->name])) {
                $array = in_array($field->type, ['checkbox', 'file']);
                $this->form_data[$field->name] = $field->default ?? ($array ? [] : null);
                if (Str::contains($field->name, '.')) {
                    [$rel,$rel_field] = explode('.', $field->name);

                    $rel_val = '';
                    try {
                        $rel_val = $model->$rel->$rel_field;
                    } catch (\Exception $e) {
                    }
                    $this->form_data[$field->name] = $rel_val;
                }
            }
        }
    }
}

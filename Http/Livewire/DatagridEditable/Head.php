<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\DatagridEditable;

use Illuminate\Support\Str;
//use Livewire\WithFileUploads;
use Modules\FormX\Services\FieldService;
//use Modules\FormX\Traits\HandlesArrays;
//use Modules\FormX\Traits\UploadsFiles;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Http\Livewire\XotBaseComponent;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

/**
 * Modules\FormX\Http\Livewire\DatagridEditable\Head.
 *
 * @property XotBasePanel $panel
 */
class Head extends XotBaseComponent {
    //  use WithFileUploads;
    //  use UploadsFiles;
    //  use HandlesArrays;
    //public $index_fields = [];
    //public $route_params = [];
    //public $data =  [];
    //public $in_admin;

    public $row;

    public $index;
    //public $fields;

    public array $form_data = [];

    /**
     * @param object $row
     * @param string $index
     */
    public function mount($row, $index) {
        /*
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->in_admin = inAdmin();
        $this->route_params['in_admin'] = $this->in_admin;
        */
        $this->row = $row;
        $this->index = $index;
        //$this->fields = $fields;
        $this->setFormProperties($row);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $view = $this->getView();
        $view_params = [
            'view' => $view,
            'form_data' => $this->form_data,
            'fields' => $this->fields(),
        ];

        return view($view, $view_params);
    }

    public function fields(): array {
        $index_fields = $this->panel->indexFields();

        $fields = [];
        foreach ($index_fields as $field) {
            $fields[] = FieldService::make($field->name)
                ->type($field->type)
                ->setInputComponent('nolabel');
        }

        return $fields;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|mixed|null
     */
    public function getPanelProperty() {
        return PanelService::get($this->row);
    }

    public function setFormProperties(?ModelContract $model = null): void {
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

<?php

namespace Modules\FormX\Http\Livewire;

use Modules\FormX\Services\FieldService;
use Modules\Xot\Services\PanelService;

//use Illuminate\Support\Carbon;

class Edit extends XotBaseFormComponent {
    public $index_fields = [];
    public $route_params = [];
    public $data = [];

    public function mount($model = null) {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->setFormProperties($model);
    }

    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    public function rules($param = null) {
        return [];
    }

    public function fields() {
        $panel_fields = $this->panel->editFields();
        $fields = [];
        foreach ($panel_fields as $field) {
            $fields[] = FieldService::make($field->name)->type($field->type);
        }
        /*
 return [
     FieldService::make('Name')->input()->rules(['required', 'string', 'max:255']),
     FieldService::make('Email')->input('email')->rules(['required', 'string', 'email', 'max:255', 'unique:users,email']),
     FieldService::make('Password')->input('password')->rules(['required', 'string', 'min:8', 'confirmed']),
     FieldService::make('Confirm Password', 'password_confirmation')->input('password'),
 ];
 */

        return $fields;
    }
}

<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\FormX\Services\FieldService;

/**
 * Class Field.
 */
class Field extends Component {
    public array $field_arr;

    public array $form_data = [];

    /**
     * @var array $listeners
     */
    protected $listeners = ['setFormData'];

    public function mount(object $field): void {
        //$this->field = FieldService::make($field->name)->type($field->type);
        //$this->field_arr = (array) $field;
        $this->field_arr = $field->toArray();
    }

    public function setFormData(/*$formData*/): void {
        //$this->form_data = $form_data;
        dddx($this->form_data);
    }

    public function render(): Renderable {
        $view = 'formx::livewire.fields.text.field';

        $view_params = [
            'view' => $view,
            //'field' => $this->field,
            'field' => FieldService::make($this->field_arr['name'])->type($this->field_arr['type']),
        ];

        //return '<div>A</div>';

        return view()->make($view, $view_params);
    }
}

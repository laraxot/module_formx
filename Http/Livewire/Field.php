<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire;

use Livewire\Component;
use Modules\FormX\Services\FieldService;

/**
 * Class Field.
 */
class Field extends Component {
    public $field_arr;

    public array $form_data = [];

    protected $listeners = ['setFormData'];

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function mount($field) {
        //$this->field = FieldService::make($field->name)->type($field->type);
        //$this->field_arr = (array) $field;
        $this->field_arr = $field->toArray();
    }

    public function setFormData($formData) {
        //$this->form_data = $form_data;
        dddx($this->form_data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $view = 'formx::livewire.fields.text.field';

        $view_params = [
            'view' => $view,
            //'field' => $this->field,
            'field' => FieldService::make($this->field_arr['name'])->type($this->field_arr['type']),
        ];

        //return '<div>A</div>';

        return view($view, $view_params);
    }
}

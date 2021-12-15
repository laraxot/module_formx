<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\Manage;

use Illuminate\Support\Collection;
use Livewire\Component;
use Modules\FormX\Traits\HandlesArrays;

class PhpArray extends Component {
    use HandlesArrays;

    public string $filename;

    //public Collection $field;
    public array $form_data = [];

    public function mount(/*string $filename*/) {
        // $this->filename = $filename;

        $this->form_data[$this->field->name] = [
            (object) [
                'name' => 'prova',
            ],
            (object) [
                'name' => 'nonnapapera',
            ],
        ];
    }

    public function getFieldProperty() {
        $field = (object) ([
            'key' => '1',
            'name' => 'test',
            'label' => 'label',
            'array_sortable' => true,
            'help' => 'che questo possa aiutarti',
            'array_fields' => [
                (object) [
                    'key' => 5,
                    'name' => 'pluto',
                    'type' => 'textarea',
                    'placeholder' => 'placeholder',
                    'textarea_rows' => 6,
                    'column_width' => 6,
                    'help' => 'un help ?',
                ],
                /*
                (object) [
                    'key' => 6,
                    'name' => 'paperino',
                    'type' => 'textarea',
                    'placeholder' => 'placeholder',
                    'textarea_rows' => 6,
                    'column_width' => 6,
                    'help' => 'un help ?',
                ],
                */
            ],
        ]);

        return $field;
    }

    public function fields() {
        return [
            (object) [
                'name' => 'nonna papera',
            ],
        ];
    }

    public function render() {
        $view = 'formx::livewire.manage.php-array';
        $view_params = [
            'view' => $view,
            'field' => $this->field,
        ];

        return view()->make($view, $view_params);
    }
}
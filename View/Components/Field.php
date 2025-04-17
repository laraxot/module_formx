<?php

declare(strict_types=1);

namespace Modules\FormX\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

//use Modules\Xot\View\Components\XotBaseComponent;

/**
 * Class Field.
 */
class Field extends Component {
    /*
    public array $vars = [
        'input_component' => 'formx::components.label_input.default',
        'label' => '',
        'name' => '',
        'type' => '',
    ];
    */
    public string $input_component = 'formx::components.label_input.default';

    public string $name = '';

    public string $label = '';

    public string $type = '';

    public array $attrs = [];

    public function __construct(object $field) {
        $this->name = $field->getName();
        $this->attrs['name'] = $field->getName();
        $this->attrs['wire:model.lazy'] = $field->getKey();
        $this->attrs['id'] = $field->getKey();
        $this->label = $field->getLabel();
        $this->type = $field->getType();
    }

    /*
    public function __get(string $index) {
        return $this->vars[$index];
    }

    public function __set(string $index, $value): void {
        //echo '<br/>SET ['.get_class($this).']['.$index.']['.round(memory_get_usage()/(1024*1024),2).' MB]';
        $this->vars[$index] = $value;
    }
    */

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render() {
        $type = str_replace('._', '.', Str::snake($this->type));

        if (Str::startsWith($type, 'select_')) {
            $type = 'select.'.Str::after($type, 'select_');
        }
        /*
        valutare se spostare sta logica in collective
        */
        $view = 'formx::components.fields.'.$type.'.field';

        $view_params = [
            'view' => $view,
        ];
        //$view_params = array_merge($view_params, $this->vars);
        if (! view()->exists($view)) {
            dddx(['view' => $view, 'type' => $type]);
        }

        return view()->make($view, $view_params);
    }
}

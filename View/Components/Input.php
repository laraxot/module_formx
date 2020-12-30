<?php

namespace Modules\FormX\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Input extends Component {
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;
    public $label;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $name = null, $label = null) {
        //dddx(func_get_args());
        //dddx(get_class_methods($this));

        $this->type = $type;
        /*
        if (isset($label)) {
            $this->label = $label;
        } else {
            $this->label = 'No-Set-Label';
        }
        */
        $this->label = $label ?? 'No-Set-Label';
        $this->name = $name ?? 'No-Set-Name';
        //dddx($this->data());
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render(): View {
        $view = 'formx::components.fields.'.$this->type.'.field';

        return view($view);
    }
}

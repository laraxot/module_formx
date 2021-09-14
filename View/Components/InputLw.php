<?php

declare(strict_types=1);

namespace Modules\FormX\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class InputLw extends Component {
    public $props;
    public array $attrs = [];
    public string $input_component = 'formx::components.label_input.with_size';
    public string $label = 'test';
    public string $name = 'name';

    /*
    $converted = Str::kebab('fooBar');// foo-bar
    $converted = Str::snake('fooBar'); // foo_bar
    $converted = Str::snake('fooBar', '-'); // foo-bar
    $converted = Str::camel('foo_bar'); // fooBar
    */

    public function __construct($props) {
        if (is_object($props)) {
            $props = get_object_vars($props);
        }
        $this->attrs['class'] = 'form-control';
        $this->attrs['wire:model'] = 'form_data.'.$props['name'];

        $this->props = $props;
        //$this->label = $props['type'].'['.Str::snake($props['type'], '.').']';
        $this->name = $props['name'];
        $this->label = $props['label'] ?? $props['name'];
    }

    public function render() {
        //return '<div>'.print_r($this->props, true).'</div>';
        $view = Str::snake($this->props['type'], '.');
        $view = 'formx::components.fields.'.$view.'.field';
        if (! view()->exists($view)) {
            return '<h3>view not exists ['.$view.']</h3>';
        }

        return view($view);
    }
}

<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\Chip;

use Livewire\Component;

class Simple extends Component {
    public $row;
    public $elements;
    public $tag = 'test';

    /*
     * Undocumented function.
     *
     * @return void
     */

    public function mount($row, $name) {
        //$this->row = $row;
        //$this->elements = $row->{$name};
        //$this->content = $post->content;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $view = 'formx::livewire.chip.simple';

        $view_params = [
            'view' => $view,
            'elements' => $this->elements,
        ];

        return view($view, $view_params);
    }

    public function add() {
        dddx('preso');
    }
}

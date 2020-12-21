<?php

namespace Modules\FormX\Http\Livewire\Test;

use Livewire\Component;

class Row extends Component {
    public $row;
    public $index;

    public function mount($row, $index) {
        $this->row = $row;
        $this->index = $index;
    }

    public function render() {
        return view('formx::livewire.test.row');
    }
}

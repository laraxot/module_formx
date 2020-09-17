<?php

namespace Modules\FormX\Http\Livewire;

use Livewire\Component;

class Numberer extends Component {
    public $excrement = 'poop';
    public $count;

    public function mount() {
        $this->count = 0;
    }

    public function render() {
        return view('formx::livewire.numberer');
    }

    public function increment() {
        ++$this->count;
    }

    public function decrement() {
        --$this->count;
    }
}

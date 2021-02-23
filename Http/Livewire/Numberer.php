<<<<<<< HEAD
<?php

namespace Modules\FormX\Http\Livewire;

use Livewire\Component;

/**
 * Class Numberer.
 */
class Numberer extends Component {
    public string $excrement = 'poop';

    public int $count;

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function mount() {
        $this->count = 0;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        return view()->make('formx::livewire.numberer');
    }

    public function increment(): void {
        ++$this->count;
    }

    public function decrement(): void {
        --$this->count;
    }
=======
<?php

namespace Modules\FormX\Http\Livewire;

use Livewire\Component;

/**
 * Class Numberer.
 */
class Numberer extends Component {
    public string $excrement = 'poop';

    public int $count;

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function mount() {
        $this->count = 0;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        return view()->make('formx::livewire.numberer');
    }

    public function increment(): void {
        ++$this->count;
    }

    public function decrement(): void {
        --$this->count;
    }
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
}
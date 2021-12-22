<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\Inputs;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

/**
 * Class Field.
 */
class ToggleDate extends Component {
    public Model $model;
    public string $fieldName;

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function mount(Model $model, string $fieldName) {
        $this->model = $model;
        $this->fieldName = $fieldName;
    }

    /**
     * Undocumented function.
     *
     * @return Renderable
     */
    public function render() {
        $view = 'formx::livewire.inputs.toggle-date';
        $view_params = [
            'view' => $view,
        ];

        return view()->make($view, $view_params);
    }
}
<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Modules\FormX\Services\FieldService;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

//use Illuminate\Support\Carbon;

/**
 * Modules\FormX\Http\Livewire\Edit.
 *
 * @property XotBasePanel $panel
 */
class Edit extends XotBaseFormComponent {
    public array $index_fields = [];

    public array $route_params = [];

    public array $data = [];

    public function mount(?Model $model = null): void {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->setFormProperties($this->panel->row);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response|mixed|null
     */
    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    /**
     * @param false $param
     *
     * @return array
     */
    public function rules($param = false) {
        return [];
    }

    public function fields(): array {
        $panel_fields = $this->panel->editFields();
        $fields = [];
        foreach ($panel_fields as $field) {
            $fields[] = FieldService::make($field->name)->type($field->type);
        }
        /*
 return [
     FieldService::make('Name')->input()->rules(['required', 'string', 'max:255']),
     FieldService::make('Email')->input('email')->rules(['required', 'string', 'email', 'max:255', 'unique:users,email']),
     FieldService::make('Password')->input('password')->rules(['required', 'string', 'min:8', 'confirmed']),
     FieldService::make('Confirm Password', 'password_confirmation')->input('password'),
 ];
 */

        return $fields;
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Modules\FormX\Services\FieldService;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

//use Illuminate\Support\Carbon;

/**
 * Modules\FormX\Http\Livewire\Edit.
 *
 * @property XotBasePanel $panel
 */
class Edit extends XotBaseFormComponent {
    public array $index_fields = [];

    public array $route_params = [];

    public array $data = [];

    public function mount(?Model $model = null): void {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->setFormProperties($this->panel->row);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response|mixed|null
     */
    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    /**
     * @param false $param
     *
     * @return array
     */
    public function rules($param = false) {
        return [];
    }

    public function fields(): array {
        $panel_fields = $this->panel->editFields();
        $fields = [];
        foreach ($panel_fields as $field) {
            $fields[] = FieldService::make($field->name)->type($field->type);
        }
        /*
 return [
     FieldService::make('Name')->input()->rules(['required', 'string', 'max:255']),
     FieldService::make('Email')->input('email')->rules(['required', 'string', 'email', 'max:255', 'unique:users,email']),
     FieldService::make('Password')->input('password')->rules(['required', 'string', 'min:8', 'confirmed']),
     FieldService::make('Confirm Password', 'password_confirmation')->input('password'),
 ];
 */

        return $fields;
    }
}
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

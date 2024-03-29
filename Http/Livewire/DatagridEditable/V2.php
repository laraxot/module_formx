<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\DatagridEditable;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\FormX\Services\FieldService;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\RowsContract;
//use Modules\FormX\Traits\HandlesArrays;
//use Modules\FormX\Traits\UploadsFiles;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

/**
 * Modules\FormX\Http\Livewire\DatagridEditable\V2.
 *
 * @property XotBasePanel $panel
 */
class V2 extends Component {
    use WithFileUploads;

    //use UploadsFiles;
    //use HandlesArrays;
    //protected $paginationTheme = 'bootstrap';
    public array $route_params = [];

    public array $data = [];

    public bool $in_admin;

    public int $per_page = 10;

    public int $total;

    public int $page;

    public Collection $rows;

    public function mount(): void {
        $this->route_params = optional(request()->route())->parameters();
        $this->data = request()->all();
        $this->in_admin = inAdmin();
        $this->route_params['in_admin'] = $this->in_admin;
        $this->total = $this->query()->count();
        $this->page = request()->input('page', 1);
        $offset = ($this->page - 1) * $this->per_page;
        $rows = $this->query()->offset((int) $offset)->limit($this->per_page)->get();
        //$rows = collect($rows->toArray());
        //dddx($rows);
        $this->rows = $rows;
        //dddx($this->rows);
    }

    public function rules(): array {
        $tmp = $this->panel->rules(['act' => 'update']);
        $rules = [];
        foreach ($tmp as $k => $v) {
            $k1 = 'rows.*.'.$k;
            $rules[$k1] = $v;
        }

        return $rules;
    }

    public function getPanelProperty(): PanelContract {
        return PanelService::getByParams($this->route_params);
    }

    public function query(): RowsContract {
        return $this->panel->rows($this->data)->with('post');
    }

    public function render(): ViewContract {
        $view = 'formx::livewire.datagrid_editable.v2';
        $view_params = [
            'view' => $view,
        ];

        //dddx($this->rows);
        //Parameter #1 $view of function view expects view-string|null, string given.
        return view()->make($view, $view_params);
    }

    /**
     * @param string $field_name
     * @param string $field_type
     *
     * @return FieldService
     */
    public static function makeField($field_name, $field_type) {
        return FieldService::make($field_name)
                    ->type($field_type)
                    ->setInputComponent('nolabel');
    }

    /**
     * @param string $err
     */
    public static function errorMessage($err): string {
        session()->flash('error_message', $err);

        return $err;
    }

    public function rowsUpdate(): void {
        $data = $this->validate();
        $data = $data['rows'];
        dddx($data);
        $func = '\Modules\Xot\Jobs\PanelCrud\UpdateJob';
        foreach ($this->rows as $k => $row) {
            $func::dispatch($data[$k], PanelService::get($row));
        }
        session()->flash('message', 'Post successfully updated.');
    }

    public function carica(): void {
        dddx(['funzione carica di datatable']);
        //dddx($this->rows);
    }
}

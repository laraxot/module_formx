<?php

namespace Modules\FormX\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
//use Modules\EwPhoto\Models\Photo;
//use Modules\FormX\Services\FieldService;
use Modules\FormX\Traits\HandlesArrays;
use Modules\FormX\Traits\UploadsFiles;
use Modules\Xot\Services\PanelService;

class DatagridEditable extends Component {
    //use WithPagination;
    use WithFileUploads;
    use UploadsFiles;
    use HandlesArrays;
    protected $paginationTheme = 'bootstrap';
    public $index_fields = [];
    public $route_params = [];
    public $in_admin;
    public $per_page = 10;
    public $total;
    public $page;
    public Collection $rows;
    //protected $rows;
    //protected $data = [];
    //protected $rules = [];
    //protected $panel_fields;
    //protected $fields;

    //protected $rules = [];

    //protected $rules = [
    //'posts.*.title' => 'required|string|min:6',
    //'posts.*.content' => 'required|string|max:500',
    //'rows.*.img' => 'required|string|max:500',
    //'rows.*.post.title' => 'string|max:500',
    //];

    public function mount() {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->in_admin = inAdmin();
        $this->route_params['in_admin'] = $this->in_admin;

        //$this->rows = Photo::with('post')->limit(20)->get();
        //$this->rows = $this->query()->paginate(20);

        $this->total = $this->query()->count();
        $this->page = request()->input('page', 1);
        $offset = ($this->page - 1) * $this->per_page;
        $this->rows = $this->query()->offset($offset)->limit($this->per_page)->get();
    }

    public function rules() {
        $tmp = $this->panel->rules(['act' => 'update']);
        $rules = [];
        foreach ($tmp as $k => $v) {
            $k1 = 'rows.*.'.$k;
            $rules[$k1] = $v;
        }

        return $rules;
    }

    //*/

    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    public function query() {
        return $this->panel->rows($this->data);
    }

    public function render() {
        $view = 'formx::livewire.datagrid_editable';
        //$this->rows = $this->query()->paginate(20);
        //$this->rows = $this->query()->limit(10)->get();
        //dddx($rows);

        $view_params = [
            'view' => $view,
            //'rows' => $this->query()->paginate(5),
            // 'fields' => $this->fields(),
        ];
        //dddx([inAdmin(), $this->in_admin, $this->route_params]);

        return view($view, $view_params);
    }

    /*
    public function fields() {
        $this->panel_fields = $this->panel->editFields();

        $fields = [];
        foreach ($this->panel_fields as $field) {
            $fields[] = FieldService::make($field->name)->type($field->type);
        }

        return $fields;
    }
    */

    public static function errorMessage($err) {
        session()->flash('error_message', $err);
    }

    public function rowsUpdate() {
        $data = $this->validate();
        $data = $data['rows'];
        $func = '\Modules\Xot\Jobs\PanelCrud\UpdateJob';
        foreach ($this->rows as $k => $row) {
            $func::dispatch($data[$k], PanelService::get($row));
        }
        session()->flash('message', 'Post successfully updated.');
    }
}

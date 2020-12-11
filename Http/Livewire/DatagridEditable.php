<?php

namespace Modules\FormX\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\EwPhoto\Models\Photo;
use Modules\FormX\Services\FieldService;
use Modules\FormX\Traits\HandlesArrays;
use Modules\FormX\Traits\UploadsFiles;
use Modules\Xot\Services\PanelService;

class DatagridEditable extends Component {
    use WithFileUploads;
    use UploadsFiles;
    use HandlesArrays;
    public $index_fields = [];
    public $route_params = [];
    public $in_admin;
    public Collection $rows;
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
        $this->rows = Photo::with('post')->limit(20)->get();
        //dddx($this->rows);

        //$this->rules = $rules;
        //----------------------

        //$this->fields = $fields;
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

    public function render() {
        $view = 'formx::livewire.datagrid_editable';
        $view_params = [
            'view' => $view,
            'rows' => $this->rows,
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
        dddx($data);
        //dddx($this->rules());
        //dddx([$data, $this->rules(), inAdmin(), $this->in_admin, $this->panel, $this->panel->in_admin, $this->route_params]);
        $func = '\Modules\Xot\Jobs\PanelCrud\UpdateJob';
        foreach ($this->rows as $k => $row) {
            // $row->save();
            //$func->setData($data[$k]);
            //$request = request();
            $func::dispatch($data[$k], PanelService::get($row));
        }
        session()->flash('message', 'Post successfully updated.');
    }
}

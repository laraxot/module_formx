<?php

namespace Modules\FormX\Http\Livewire\DatagridEditable;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;
use Modules\FormX\Services\FieldService;
use Modules\FormX\Traits\HandlesArrays;
//use Modules\FormX\Traits\UploadsFiles;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Http\Livewire\XotBaseComponent;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

/**
 * Modules\FormX\Http\Livewire\DatagridEditable\Row.
 *
 * @property XotBasePanel $panel
 */
class Row extends XotBaseComponent {
    use WithFileUploads;
    //use UploadsFiles;
    use HandlesArrays;

    public array $index_fields = [];
    public array $route_params = [];
    public array $data = [];

    public $in_admin;

    public $row;

    public $index;

    public array $form_data = [];

    public array $rows = [];

    /**
     * @param object $row
     * @param string $index
     */
    public function mount($row, $index) {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->in_admin = inAdmin();
        $this->route_params['in_admin'] = $this->in_admin;

        $this->row = $row;
        $this->index = $index;
        //$this->fields = $fields;
        $this->setFormProperties($row);
    }

    public function rules(): array {
        $tmp = $this->panel->rules(['act' => 'update']);
        $rules = [];
        foreach ($tmp as $k => $v) {
            $k1 = 'form_data.'.$k;
            $rules[$k1] = $v;
        }

        return $rules;
    }

    /**
     * @param string $err
     */
    public static function errorMessage($err): string {
        session()->flash('error_message', $err);

        return $err;
    }

    public function fields(): array {
        $panel_fields = $this->panel->indexFields();

        $fields = [];
        foreach ($panel_fields as $field) {
            $fields[] = FieldService::make($field->name)
                ->type($field->type)
                ->setInputComponent('nolabel')
                //->set('form_data',$this->)
                ;
        }

        return $fields;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response|mixed|null
     */
    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    //*

    public function setFormProperties(?ModelContract $model = null): void {
        //$this->model = $model;
        if ($model) {
            $this->form_data = $model->toArray();
        }

        foreach ($this->fields() as $field) {
            if (! isset($this->form_data[$field->name])) {
                $array = in_array($field->type, ['checkbox', 'file']);
                $this->form_data[$field->name] = $field->default ?? ($array ? [] : null);
                if (Str::contains($field->name, '.')) {
                    [$rel,$rel_field] = explode('.', $field->name);

                    $rel_val = '';
                    try {
                        $rel_val = $model->$rel->$rel_field;
                    } catch (\Exception $e) {
                    }
                    $this->form_data[$field->name] = $rel_val;
                }
            }
        }
        $this->rows[$this->index] = $this->form_data; //???
    }

    //*/

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $view = $this->getView();
        $view_params = [
            'view' => $view,
            'form_data' => $this->form_data,
            'fields' => $this->fields(),
        ];
        //dddx(['view' => $view, 'view_params' => $view_params]);

        return view($view, $view_params);
    }

    public function rowUpdate() {
        $data = $this->validate();
        $data = $data['form_data'];
        $func = '\Modules\Xot\Jobs\PanelCrud\UpdateJob';
        //$func::dispatchNow($data, $this->panel);

        session()->flash('message', 'Post successfully updated.');
    }

    /**
     * @param string $index
     * @param string $file_name
     * @param string $file_type
     * @param array  $data
     */
    public function carica($index, $file_name, $file_type, $data) {
        //dddx('funzione carica di row');

        //dddx($this->form_data['tmp']);
        $img = Image::make($data);

        $path = Storage::disk('public_html')->path('/uploads/gallery/'.$file_name);

        $img->save($path, 75); //75 quality
    }

    /**
     * @param mixed $a
     */
    public function updated($a) {
        dddx($a);
    }
}
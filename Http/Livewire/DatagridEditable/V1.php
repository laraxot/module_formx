<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\DatagridEditable;

/*
 * griglia che salva tutte le righe con il submit unico
 */

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\FormX\Services\FieldService;
//use Modules\FormX\Traits\HandlesArrays;
//use Modules\FormX\Traits\UploadsFiles;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

/**
 * Modules\FormX\Http\Livewire\DatagridEditable\V1.
 *
 * @property XotBasePanel $panel
 */
class V1 extends Component {
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

    public function mount() {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->in_admin = inAdmin();
        $this->route_params['in_admin'] = $this->in_admin;
        $this->total = $this->query()->count();
        $this->page = request()->input('page', 1);
        $offset = ($this->page - 1) * $this->per_page;
        $rows = $this->query()->offset($offset)->limit($this->per_page)->get();
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

    public function getPanelProperty(): XotBasePanel {
        return PanelService::getByParams($this->route_params);
    }

    /**
     * @return mixed
     */
    public function query() {
        //dddx([$this->panel->rows($this->data), $this->panel->rows, $this->panel, $this->data]);
        //dddx($this->panel->rows($this->data)->with('post')->get());

        //return $this->panel->rows($this->data);
        return $this->panel->rows($this->data)->with('post');
    }

    public function render(): View {
        $view = 'formx::livewire.datagrid_editable.v1';
        $view_params = [
            'view' => $view,
        ];

        //dddx($this->rows);

        return view($view, $view_params);
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

    public function rowsUpdate() {
        $data = $this->validate();
        $data = $data['rows'];

        $func = '\Modules\Xot\Jobs\PanelCrud\UpdateJob';
        foreach ($this->rows as $k => $row) {
            $func::dispatch($data[$k], PanelService::get($row));
        }
        session()->flash('message', 'Post successfully updated.');
    }

    /**
     * @param string $index
     * @param string $file_name
     * @param string $file_type
     * @param array  $data
     */
    public function carica($index, $file_name, $file_type, $data) {
        //dddx(['index' => $index, 'file_name' => $file_name, 'file_type' => $file_type]);
        //dddx('funzione carica di row');
        //$this->set($index, $file_name);
        //$index = rows.0.img
        $tmp = explode('.', $index);
        $file_name_full = '/uploads/gallery/'.$file_name;

        $this->rows[$tmp[1]]->{$tmp[2]} = $file_name_full;
        /*
        $this->rows->map(function($item,$key){

        });
        */

        //dddx(['rows' => $this->rows]);
        //dddx($this->form_data['tmp']);
        $img = Image::make($data);

        $path = Storage::disk('public_html')->path($file_name_full);

        $img->save($path, 75); //75 quality
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\DatagridEditable;

/*
 * griglia che salva tutte le righe con il submit unico
 */

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\FormX\Services\FieldService;
//use Modules\FormX\Traits\HandlesArrays;
//use Modules\FormX\Traits\UploadsFiles;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

/**
 * Modules\FormX\Http\Livewire\DatagridEditable\V1.
 *
 * @property XotBasePanel $panel
 */
class V1 extends Component {
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

    public function mount() {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->in_admin = inAdmin();
        $this->route_params['in_admin'] = $this->in_admin;
        $this->total = $this->query()->count();
        $this->page = request()->input('page', 1);
        $offset = ($this->page - 1) * $this->per_page;
        $rows = $this->query()->offset($offset)->limit($this->per_page)->get();
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

    public function getPanelProperty(): XotBasePanel {
        return PanelService::getByParams($this->route_params);
    }

    /**
     * @return mixed
     */
    public function query() {
        //dddx([$this->panel->rows($this->data), $this->panel->rows, $this->panel, $this->data]);
        //dddx($this->panel->rows($this->data)->with('post')->get());

        //return $this->panel->rows($this->data);
        return $this->panel->rows($this->data)->with('post');
    }

    public function render(): View {
        $view = 'formx::livewire.datagrid_editable.v1';
        $view_params = [
            'view' => $view,
        ];

        //dddx($this->rows);

        return view($view, $view_params);
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

    public function rowsUpdate() {
        $data = $this->validate();
        $data = $data['rows'];

        $func = '\Modules\Xot\Jobs\PanelCrud\UpdateJob';
        foreach ($this->rows as $k => $row) {
            $func::dispatch($data[$k], PanelService::get($row));
        }
        session()->flash('message', 'Post successfully updated.');
    }

    /**
     * @param string $index
     * @param string $file_name
     * @param string $file_type
     * @param array  $data
     */
    public function carica($index, $file_name, $file_type, $data) {
        //dddx(['index' => $index, 'file_name' => $file_name, 'file_type' => $file_type]);
        //dddx('funzione carica di row');
        //$this->set($index, $file_name);
        //$index = rows.0.img
        $tmp = explode('.', $index);
        $file_name_full = '/uploads/gallery/'.$file_name;

        $this->rows[$tmp[1]]->{$tmp[2]} = $file_name_full;
        /*
        $this->rows->map(function($item,$key){

        });
        */

        //dddx(['rows' => $this->rows]);
        //dddx($this->form_data['tmp']);
        $img = Image::make($data);

        $path = Storage::disk('public_html')->path($file_name_full);

        $img->save($path, 75); //75 quality
    }
}
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

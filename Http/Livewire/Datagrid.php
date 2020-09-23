<?php

namespace Modules\FormX\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\LU\Models\User;
use Modules\Theme\Services\ThemeService;

//use Modules\Cart\Models\BookingItem;

/**
 * full calendar
 * https://github.com/asantibanez/livewire-calendar
 * https://github.com/stijnvanouplines/livewire-calendar/blob/master/app/Http/Livewire/Calendar.php.
 */
class Datagrid extends Component {
    use WithPagination;
    public $index_fields = []; //private lo perde,protected anche
    public $sql = '';
    public $where = '';

    /**
     * Livewire component's [modules.form-x.http.livewire.datagrid] public property [rows] must be of type: [numeric, string, array, null, or boolean]. Only protected or private properties can be set as other types because JavaScript doesn't need to access them.
     */
    public function mount($_panel) {
        $index_fields = $_panel->indexFields();
        $this->index_fields = $index_fields;
        $rows = $_panel->rows();
        $sql = $rows->toSql();
        $bindings = collect($rows->getBindings())->map(function ($item) {
            return "'".$item."'";
        })->all();
        $this->sql = str_replace(explode(',', str_repeat('?,', 10)), $bindings, $sql);
        /*

        $sql = str_replace(['?'], ['\'%s\''], $sql);
        $sql = vsprintf($sql, $bindings);

        */
        if (Str::contains($this->sql, ' where ')) {
            $this->where = Str::after($this->sql, 'where');
        }
    }

    public function printf_array($format, $arr) {
        return call_user_func_array('printf', array_merge((array) $format, $arr));
    }

    public function render() {
        $view = 'formx::livewire.datagrid';
        $model = new User();
        //newQuery(); Builder $query
        $rows = $model->newQuery();
        //$rows = $model; //perche' usare newQuery ?
        //$rows = $rows->selectRaw($this->sql);
        //*
        if ('' != $this->where) {
            $rows = $rows->whereRaw($this->where);
        }
        //*/
        $rows = $rows->paginate(10);

        $view_params = [
            'rows' => $rows,
        ];

        return view($view, $view_params);
    }

    public function getView() { //no di themeservice, perche' livewire
        $mod_name = Str::between(get_class(), 'Modules\\', '\\Http\\');
        $mod_name_low = strtolower($mod_name);
        $name = Str::after(get_class(), '\Http\Livewire\\');
        $name = str_replace('\\', '.', $name);
        $name = Str::snake($name);
        $view = $mod_name_low.'::livewire.'.$name;

        return $view;
    }
}

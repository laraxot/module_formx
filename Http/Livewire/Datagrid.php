<?php

namespace Modules\FormX\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
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
    public $model_class;

    /**
     * Livewire component's [modules.form-x.http.livewire.datagrid] public property [rows] must be of type: [numeric, string, array, null, or boolean]. Only protected or private properties can be set as other types because JavaScript doesn't need to access them.
     */
    public function mount($_panel) {
        $this->model_class = get_class($_panel->row);
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

    /*
    public function printf_array($format, $arr) {
        return call_user_func_array('printf', array_merge((array) $format, $arr));
    }
    */

    public function render() {
        $view = 'formx::livewire.datagrid';
        $model = new $this->model_class();

        $select = Str::between($this->sql, 'select', 'from');
        $join = '';
        if (Str::contains($this->sql, 'join')) {
            $join = Str::between($this->sql, 'join', 'where');
            $join_table = trim(Str::before($join, 'on'));
            $join_table = str_replace(['`'], [''], $join_table);
            $join_on = trim(Str::after($join, 'on'));
        }
        $where = '';
        if (Str::contains($this->sql, 'where')) {
            $where = Str::between($this->sql, 'where', 'limit');
        }

        $rows = $model->newQuery();
        $rows = $rows->selectRaw($select);
        if ('' != $join) {
            $rows = $rows->join($join_table, function ($query) use ($join_on) {
                $query->whereRaw($join_on);
            });
        }
        if ('' != $where) {
            $rows = $rows->whereRaw($where);
        }
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
